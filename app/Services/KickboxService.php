<?php

namespace App\Services;

use GuzzleHttp\Client;

class KickboxService
{
    protected $client;
    protected $apiKey;

    public function __construct()
    {
        $this->client = new Client();
        $this->apiKey = env('KICKBOX_API_KEY');
    }

    public function verify($email)
    {
        $response = $this->client->get('https://api.kickbox.com/v2/verify', [
            'query' => [
                'email' => $email,
                'apikey' => $this->apiKey,
            ]
        ]);

        return json_decode($response->getBody(), true);
    }
}
