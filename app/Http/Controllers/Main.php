<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Main extends Controller
{
    public $temp_paginate = [];
    public function index()
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://api-football-beta.p.rapidapi.com/fixtures?timezone=Asia%2FJakarta&season=2021&status=FT&league=39",
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
            $result = json_decode($response, true);
            $fixture = $result['response'];
            $count = count($fixture);
            for ($i = 0; $i < $count; $i++) {
                for ($j = $i + 1; $j < $count; $j++) {
                    if ($fixture[$i]['fixture']['timestamp'] < $fixture[$j]['fixture']['timestamp']) {
                        $temp = $fixture[$i];
                        $fixture[$i] = $fixture[$j];
                        $fixture[$j] = $temp;
                    }
                }
            }
            $data['data'] = $fixture;
            return view('home_page',$data);
        }
        
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

        // if ($err) {
        //     echo "cURL Error #:" . $err;
        // } else {
        //     $result = json_decode($response,true);
        //     $this->temp_paginate = $result['response'];

        // }

        return view('matches');
    }
    public function Clubs()
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://api-football-beta.p.rapidapi.com/teams?league=39&season=2021",
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
            $result = json_decode($response, true);
            $club = $result['response'];
            $count = count($club);
            for ($i = 0; $i < $count; $i++) {
                for ($j = $i + 1; $j < $count; $j++) {
                    if ($club[$i]['team']['name'] > $club[$j]['team']['name']) {
                        $temp = $club[$i];
                        $club[$i] = $club[$j];
                        $club[$j] = $temp;
                    }
                }
            }
            $data['total'] = $count;
            $data['data'] = $club;
            return view('clubs', $data);
        }
    }
    public function Matchespage($page = 0, $limit = 5)
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://api-football-beta.p.rapidapi.com/fixtures?to=2022-09-24&timezone=Asia%2FJakarta&season=2021&league=39&status=NS&from=" . date('Y-m-d') . "",
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
            $result = json_decode($response, true);
            $fixture = $result['response'];
            $count = count($fixture);
            for ($i = 0; $i < $count; $i++) {
                for ($j = $i + 1; $j < $count; $j++) {
                    if ($fixture[$i]['fixture']['timestamp'] > $fixture[$j]['fixture']['timestamp']) {
                        $temp = $fixture[$i];
                        $fixture[$i] = $fixture[$j];
                        $fixture[$j] = $temp;
                    }
                }
            }
            $startIndex = ($page - 1) * $limit;
            $endIndex = $page * $limit;

            $data['total'] = $count;
            $data['data'] = array_slice($fixture, $startIndex, $endIndex);

            return $data;
        }
    }
    public function topScorers()
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://api-football-beta.p.rapidapi.com/players/topscorers?season=2021&league=39",
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
            $result = json_decode($response, true);
            $players = $result['response'];
            $data['players'] = $players;
            return view('top_scorers', $data);
        }
    }
    public function clubInfo($id)
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://api-football-beta.p.rapidapi.com/teams/statistics?team=" . $id . "&season=2021&league=39",
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
            $result = json_decode($response, true);
            $club = $result['response'];
            $data['club'] = $club;
            return view('club_detail', $data);
        }
    }
}
