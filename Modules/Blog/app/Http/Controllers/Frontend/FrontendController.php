<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class FrontendController extends Controller
{
    /**
     * Show the application dashboard.
     */
    public function index(): View
    {
        $body_class = '';

        return view('frontend.index', compact('body_class'));
    }

    /**
     * Privacy Policy Page
     */
    public function privacy(): View
    {
        $body_class = '';

        return view('frontend.privacy', compact('body_class'));
    }

    /**
     * Terms & Conditions Page
     */
    public function terms(): View
    {
        $body_class = '';

        return view('frontend.terms', compact('body_class'));
    }
}
