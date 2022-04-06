<?php

namespace App\Library;

use App\Models\NewsLetter;
use App\Models\NewsTopic;
use Carbon\Carbon;
use GuzzleHttp\Client;

class News
{
    public $guzzle;

    public function __construct()
    {
        $this->guzzle = new Client(['base_uri' => env('NEWS_ENDPOINT')]);
    }

    public function importNews()
    {
        $news = $this->loadNews();
        foreach ($news->articles as $article) {
            $topic = NewsTopic::where('title', $article->topic)->first();
            if ($topic == null) {
                $topic = NewsTopic::create([
                    'title' => $article->topic
                ]);
            }
            NewsLetter::upsert([
                'title' => $article->title,
                'author' => $article->author,
                'link' => $article->link,
                'excerpt' => $article->excerpt,
                'summary' => nl2br(htmlentities($article->summary)),
                'rank' => $article->rank,
                'news_topic_id' => $topic->id,
                'country' => $article->country,
                'language' => $article->language,
                'media' => $article->media,
                'created_at' => $article->published_date,
            ], ['title']);
        }
    }

    public function importNewsWar($query)
    {
        $news = $this->loadNewsBySearch($query, Carbon::now()->format('Y-m-d'));
        foreach ($news->articles as $article) {
            $topic = NewsTopic::where('title', $article->topic)->first();
            if ($topic == null) {
                $topic = NewsTopic::create([
                    'title' => $article->topic
                ]);
            }
            NewsLetter::upsert([
                'title' => $article->title,
                'author' => $article->author,
                'link' => $article->link,
                'excerpt' => $article->excerpt,
                'summary' => nl2br(htmlentities($article->summary)),
                'rank' => $article->rank,
                'news_topic_id' => $topic->id,
                'query' => $query,
                'country' => $article->country,
                'language' => $article->language,
                'media' => $article->media,
                'created_at' => $article->published_date,
            ], ['title']);
        }
    }

    public function loadNews()
    {
        $raw_response = $this->guzzle->get("v2/latest_headlines?lang=es&page_size=100&when=24h", ['headers' => ['x-api-key' => env('NEWS_APIKEY')],]);
        return $this->processRaw($raw_response);
    }

    public function loadNewsBySearch($query, $date)
    {
        $raw_response = $this->guzzle->get("v2/search?q=$query&lang=es&from=$date", ['headers' => ['x-api-key' => env('NEWS_APIKEY')],]);
        return $this->processRaw($raw_response);
    }

    public function processRaw($raw_response)
    {
        return json_decode($raw_response->getBody()->getContents());
    }
}
