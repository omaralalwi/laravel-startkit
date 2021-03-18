<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class LanguageController extends Controller
{
    public function switch($language)
    {
        app()->setLocale($language);

        session()->put('locale', $language);

        setlocale(LC_TIME, $language);

        Carbon::setLocale($language);

		flash()->success(__("oa_locales.messages.success_chang") . " ". __("oa_locales.names.".$language))->important();

        return redirect()->back();
    }
}
