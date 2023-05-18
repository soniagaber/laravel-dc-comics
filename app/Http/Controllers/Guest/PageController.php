<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        $comics = config('comics');
        $headerlinks = config('headerlinks');
        $footerLinksSx = config('footerLinksSx');
        $footerLinksCentro = config('footerLinksCentro');
        $footerLinksDx = config('footerLinksDx');
        return view('home', compact('comics', 'headerlinks', 'footerLinksSx', 'footerLinksCentro', 'footerLinksDx'));
    }
}
