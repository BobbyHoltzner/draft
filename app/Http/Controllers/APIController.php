<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;

class APIController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }



    public function updatePlayers(){
      // We grab the league id that is entered by the user.
      $leagueId = getenv('LEAGUE_ID');

      $client = new Client();
      $res = $client->request('GET', 'http://football.myfantasyleague.com/2015/export?TYPE=freeAgents&L='.$leagueId.'&W=&JSON=1');

      return $res->getBody();
    }

    //
}
