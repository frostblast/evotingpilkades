<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Auth;

class DptAuthController extends Controller
{
    /**
     * Display admin login view
     *
     * @return \Illuminate\View\View
     */
    public function index () {
        if (Auth::guard('dpt')->check()) {
            return redirect()->route('dpt.index');
        } else {
            return view('voting.votes');
        }
    }

    /**
     * Handle an incoming admin authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        $this->validate($request, [
            'nik' => 'required|string',
            'password' => 'required',
        ]);

        if(auth()->guard('dpt')->attempt([
            'nik' => $request->nik,
            'password' => $request->password,
        ])) {
            $user = auth()->user();

            return redirect()->intended(url('/vote/kandidat'));
        } else {
            return redirect()->back()->with('error', 'Nomor NIK atau Password salah!');
        }
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        Auth::guard('dpt')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
