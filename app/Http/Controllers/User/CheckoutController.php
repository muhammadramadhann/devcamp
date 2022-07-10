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

        $rules = [
            'name' => 'required|min:5',
            'email' => 'required|email',
            'occupation' => 'required',
            'card_number' => 'required|numeric|digits_between:8,16',
            'expired' => 'required',
            'cvc' => 'required|numeric|min:3'
        ];

        $message = [
            'name.required' => 'Nama harus diisi',
            'name.min' => 'Minimal harus 5 karakter',
            'email.required' => 'Email harus diisi',
            'email.email' => 'Email tidak valid',
            'occupation.required' => 'Status harus diisi',
            'card_number.required' => 'Nomor kartu harus diisi',
            'card_number.numeric' => 'Nomor kartu harus berupa angka',
            'card_number.digits_between' => 'Nomor kartu tidak valid',
            'expired.required' => 'Kadaluarsa Kartu harus diisi',
            'cvc.required' => 'CVC harus diisi',
            'cvc.numeric' => 'CVC harus berupa angka',
            'cvc.min' => 'CVC tidak valid',
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
