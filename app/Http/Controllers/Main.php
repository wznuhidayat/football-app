<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Main extends Controller
{
    public $temp_paginate;
    public function index()
    {
        return view('home_page');
    }
    public function Standings()
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://api-football-beta.p.rapidapi.com/standings?season=2021&league=39",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "x-rapidapi-host: api-football-beta.p.rapidapi.com",
                "x-rapidapi-key: 0b0b1d9f51mshb9c676c3765bc8cp1082f9jsn62369aac2aed"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            // echo $response;
            $result = json_decode($response, true);
            $data['name_league'] = $result['response'][0]['league']['name'];
            $data['season'] = $result['response'][0]['league']['season'];
            $data['standings'] = $result['response'][0]['league']['standings'][0];
            return view('standings', $data);
        }
    }
    public function Matches()
    {
        // $curl = curl_init();

        // curl_setopt_array($curl, [
        //     CURLOPT_URL => "https://api-football-beta.p.rapidapi.com/fixtures?to=2022-09-24&timezone=Asia%2FJakarta&season=2021&league=39&from=" . date('Y-m-d') . "",
        //     CURLOPT_RETURNTRANSFER => true,
        //     CURLOPT_FOLLOWLOCATION => true,
        //     CURLOPT_ENCODING => "",
        //     CURLOPT_MAXREDIRS => 10,
        //     CURLOPT_TIMEOUT => 30,
        //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //     CURLOPT_CUSTOMREQUEST => "GET",
        //     CURLOPT_HTTPHEADER => [
        //         "x-rapidapi-host: api-football-beta.p.rapidapi.com",
        //         "x-rapidapi-key: 0b0b1d9f51mshb9c676c3765bc8cp1082f9jsn62369aac2aed"
        //     ],
        // ]);

        // $response = curl_exec($curl);
        // $err = curl_error($curl);

        // curl_close($curl);

        // // if ($err) {
        // //     echo "cURL Error #:" . $err;
        // // } else {
        // //     echo $response;
        // // }
        // $result = json_decode($response,true);

        // $this->temp_paginate = $result['response'][0]['league']['standings'][0];
        return view('matches');
    }
    public function Clubs()
    {
        return view('clubs');
    }
}
