<?php

namespace App\Http\Controllers;

use App\Models\NewsLetter;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function _invoke()
    {
        $now = Carbon::now();
        $news = NewsLetter::whereDay('created_at', $now->format('d'))->whereYear('created_at', $now->format('Y'))->whereMonth('created_at', $now->format('m'))->get();
        return view('home')->with('news', $news);
    }
}
