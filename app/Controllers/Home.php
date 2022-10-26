<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $curl = service('curlrequest');
        // OR $curl = \Config\Services::curlrequest();

        $posts_data = $curl->request("get", "https://api.themoviedb.org/3/discover/movie?api_key=3e4e91722cbcb4f6665dd83d27248389&language=en-US&sort_by=popularity.desc&include_adult=false&include_video=false&page=1&with_watch_monetization_types=flatrate", [
            "headers" => [
                "Accept" => "application/json"
            ]
        ]);

        $body = $posts_data->getBody();

        $data = json_decode($body);
        // dd($data->results);

        $data = [
            'movie' => $data->results
        ];

        return view('pages/index', $data);
    }
}