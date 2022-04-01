<?php

namespace App\Library;

use App\Models\NewsLetter;
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
            NewsLetter::upsert([
                'title' => $article->title,
                'author' => $article->author,
                'link' => $article->link,
                'excerpt' => $article->excerpt,
                'summary' => $article->summary,
                'rank' => $article->rank,
                'topic' => $article->topic,
                'country' => $article->country,
                'language' => $article->language,
                'media' => $article->media,
                'created_at' => $article->published_date,
            ], ['_id']);
        }
    }

    public function importNewsWar(){
        $news = $this->loadNewsBySearch();
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
