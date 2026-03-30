<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Gerencia o acesso ao Dashboard
 */
class DashboardController extends Controller
{
    /**
     * Exibe a view do dashboard
     */
    public function index()
    {
        return view('app.dashboard');
    }
}
