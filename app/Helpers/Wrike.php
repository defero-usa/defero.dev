<?php

namespace App\Helpers;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class Wrike {

    protected $api_token;
    protected $base_uri = 'https://www.wrike.com/api/v4/';

    public function __construct()
    {
        $this->api_token = config('services.wrike.key');
    }

    /**
     * @return array|mixed
     */
    public function tasks()
    {
        return $this->get('tasks', [
            'fields' => '[responsibleIds,description,briefDescription,hasAttachments]'
        ]);
    }

    /**
     * @param string $endpoint
     * @param array $query
     *
     * @return array|mixed
     */
    protected function get(string $endpoint, array $query = [])
    {
        return Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->api_token
        ])
            ->get($this->base_uri . $endpoint, $query)
            ->json();
    }

    /**
     * @param string $endpoint
     * @param array $data
     *
     * @return \Illuminate\Http\Client\Response
     */
    protected function post(string $endpoint, array $data = []): \Illuminate\Http\Client\Response
    {
        return Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->api_token
        ])
            ->post($this->base_uri . $endpoint, $data)
            ->json();
    }

}