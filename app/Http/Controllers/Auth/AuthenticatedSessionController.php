<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Leitura;
use App\Models\Posto;



class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        if (Auth::user()->profile == 'gerente') {
            $leituras = Leitura::orderBy('updated_at', 'ASC')->get();
            $postos   = Posto::orderBy('updated_at', 'ASC')->get();
            return view('leitura.index', ['leitura' => $leituras, 'postos' => $postos]);
        }

        $leituras = Leitura::orderBy('updated_at', 'ASC')->get();
        $postos   = Posto::orderBy('updated_at', 'ASC')->get();
        return view('dashboard.index', ['leitura' => $leituras, 'postos' => $postos]);


    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
