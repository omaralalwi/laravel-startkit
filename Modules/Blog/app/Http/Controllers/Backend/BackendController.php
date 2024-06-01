<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class BackendController extends Controller
{
    /**
     * Show the application dashboard.
     */
    public function index(): View
    {
        return view('backend.index');
    }
}
