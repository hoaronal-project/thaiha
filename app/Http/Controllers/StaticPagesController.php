<?php

namespace App\Http\Controllers;

use App\Models\StaticPage;
use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function show(Request $request, $slug)
    {
        $staticPage = StaticPage::where('slug', $slug)->firstOrFail();

        return view('static-pages.show', compact('staticPage'));
    }
}
