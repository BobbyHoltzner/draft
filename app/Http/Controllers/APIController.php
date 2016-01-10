<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use App\Player;

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

    public function decodeMFL($res){
      $players = $res->getBody();
      $players = json_decode($players);
      $players = $players->players->player;
      return $players;
    }



    public function updatePlayers(){
      // We grab the league id that is entered by the user.
      $leagueId = getenv('LEAGUE_ID');

      $client = new Client();
      $res = $client->request('GET', 'http://football.myfantasyleague.com/2015/export?TYPE=players&L='.$leagueId.'&W=&JSON=1');

      $players = $this->decodeMFL($res);

      foreach ($players as $player){
        Player::create([
          'name' => $player->name,
          'team' => $player->team,
          'position' => $player->position,
          'mflId' => $player->id,
        ]);
      }

      return 'Done!';

    }

    //
}
