<?php

namespace App\Http\Controllers;

use App\Library\News;
use App\Models\NewsLetter;
use App\Models\NewsTopic;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function _invoke()
    {
        $topics = NewsTopic::all();
        $now = Carbon::now();
        $news = NewsLetter::whereDay('created_at', $now->format('d'))->whereYear('created_at', $now->format('Y'))->whereMonth('created_at', $now->format('m'))->orderBy('created_at', 'DESC')->get();
        return view('home')->with('news', $news)->with('topics', $topics);
    }

    public function topic($id)
    {
        $topics = NewsTopic::all();
        $now = Carbon::now();
        $news = NewsLetter::where('news_topic_id', $id)->whereDay('created_at', $now->format('d'))->whereYear('created_at', $now->format('Y'))->whereMonth('created_at', $now->format('m'))->get();
        return view('topic')->with('news', $news)->with('topics', $topics)->with('topicid', $id);
    }

    public function news($id)
    {
        return view('show')->with('news', NewsLetter::find($id));
    }
}
