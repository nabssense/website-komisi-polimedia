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

    public function verifyEmail($email)
    {
        $response = $this->client->request('GET', 'https://api.kickbox.com/v2/verify?email=bill.lumbergh@gamil.com&apikey=live_6200c2452ceebf259c171261730359506f12f382316c69c1242180bfe25eda1b', [
            'query' => [
                'email' => $email,
                'apikey' => $this->apiKey,
            ],
        ]);

        return json_decode($response->getBody(), true);
    }
}
