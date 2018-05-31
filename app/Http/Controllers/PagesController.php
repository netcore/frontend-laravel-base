<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function resolver($page = null)
    {
        $view = '_pages.' . $page;

        if (!$page) {
            $view = '_pages.index';
        }

        if (!view()->exists($view)) {
            abort(404);
        }

        return view($view);
    }
}
