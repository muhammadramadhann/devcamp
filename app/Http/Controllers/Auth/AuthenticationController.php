<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\User\AfterRegister;
use App\Models\Camp;
use App\Models\Checkout;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Laravel\Socialite\Facades\Socialite;

class AuthenticationController extends Controller
{
    public function index_login()
    {
        return view('auth.login');
    }

    public function index_register()
    {
        return view('auth.register');
    }

    public function store_login(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        $rules = [
            'email' => 'required|email|exists:users,email',
            'password' => 'required',
        ];

        $message = [
            'email.required' => 'Email harus diisi',
            'email.email' => 'Email tidak valid',
            'email.exists' => 'Email tidak terdaftar',
            'password.required' => 'Password harus diisi'
        ];

        $validator = Validator::make($request->all(), $rules, $message);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $auth = Auth::attempt($credentials, true);

        if ($auth) {
            return redirect(RouteServiceProvider::HOME);
        }

        return back()->with('wrong_password', 'Password tidak sesuai');
    }

    public function store_register(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        $rules = [
            'name' => 'required|min:5',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
        ];

        $message = [
            'name.required' => 'Nama harus diisi',
            'name.min' => 'Minimal harus 5 karakter',
            'email.required' => 'Email harus diisi',
            'email.email' => 'Email tidak valid',
            'password.required' => 'Password harus diisi'
        ];

        $validator = Validator::make($request->all(), $rules, $message);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'email_verified_at' => date('Y-m-d H:i:s', time()),
        ]);

        Auth::attempt($credentials, true);
        return redirect(RouteServiceProvider::HOME);
    }

    public function google_oauth()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback()
    {
        $callback = Socialite::driver('google')->stateless()->user();
        $data = [
            'name' => $callback->getName(),
            'email' => $callback->getEmail(),
            'avatar' => $callback->getAvatar(),
            'email_verified_at' => date('Y-m-d H:i:s', time()),
        ];

        $user = User::where('email', $data['email'])->first();
        if (!$user) {
            $user = User::create($data);
            Mail::to($user->email)->send(new AfterRegister($user));
        }

        Auth::login($user, true);
        return redirect(RouteServiceProvider::HOME);
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->flush();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect(RouteServiceProvider::HOME);
    }
}
