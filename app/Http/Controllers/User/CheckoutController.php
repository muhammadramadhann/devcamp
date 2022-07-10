<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Camp;
use App\Models\Checkout;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('transaction.success');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Camp $camp)
    {
        // check if user is registered on chosen camp
        $is_registered = Checkout::where('camp_id', $camp->id)->where('user_id', Auth::id())->first();
        if ($is_registered) {
            return redirect(route('user.dashboard'))->with('registered', 'Kamu sudah terdaftar pada camp ' . $camp->title . ' !');
        }

        return view('transaction.checkout', [
            'camp' => $camp
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Camp $camp)
    {
        $data = $request->all();
        $date = date('Y-m', time());

        $rules = [
            'name' => 'required|min:5',
            'email' => 'required|email|unique:users,email,' . Auth::id() . 'id',
            'occupation' => 'required',
            'card_number' => 'required|numeric|digits_between:8,16',
            'expired' => 'required|date_format:Y-m|after_or_equal:' . $date,
            'cvc' => 'required|numeric|digits:3'
        ];

        $message = [
            'name.required' => 'Nama harus diisi',
            'name.min' => 'Minimal harus 5 karakter',
            'email.required' => 'Email harus diisi',
            'email.email' => 'Email tidak valid',
            'email.unique' => 'Email sudah digunakan',
            'occupation.required' => 'Status harus diisi',
            'card_number.required' => 'Nomor kartu harus diisi',
            'card_number.numeric' => 'Nomor kartu harus berupa angka',
            'card_number.digits_between' => 'Nomor kartu tidak valid',
            'expired.required' => 'Waktu kadaluarsa kartu harus diisi',
            'expired.date_format' => 'Format waktu kadaluarsa kartu tidak sesuai',
            'expired.after_or_equal' => 'Kartu sudah kadaluarsa',
            'cvc.required' => 'Nomor CVC harus diisi',
            'cvc.numeric' => 'Nomor CVC harus berupa angka',
            'cvc.digits' => 'Nomor CVC tidak valid',
        ];

        $validator = Validator::make($data, $rules, $message);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // create checkout data
        $data['user_id'] = Auth::id();
        $data['camp_id'] = $camp->id;
        Checkout::create($data);

        // update user data
        $user = User::where('id', Auth::id());
        $user->update([
            'name' => $data['name'],
            'email' => $data['email'],
            'occupation' => $data['occupation']
        ]);

        return redirect(route('transaction.success'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function show(Checkout $checkout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function edit(Checkout $checkout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Checkout $checkout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function destroy(Checkout $checkout)
    {
        //
    }
}
