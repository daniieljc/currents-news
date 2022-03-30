<?php

namespace App\Library;

use GuzzleHttp\Client;

class News
{
    public $guzzle;

    public function __construct()
    {
        $this->guzzle = new Client(['base_uri' => env('NEWS_ENDPOINT')]);
    }

    public function loadNews()
    {
        $raw_response = $this->guzzle->get('v2/latest_headlines?lang=es', [
            'headers' => ['x-api-key' => env('NEWS_APIKEY')],
        ]);
        return $this->processRaw($raw_response);
    }

    public function processRaw($raw_response)
    {
        return json_decode($raw_response->getBody()->getContents());
    }
}
