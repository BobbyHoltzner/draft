<?php

  namespace App;

  use Illuminate\Database\Eloquent\Model;

  class Draft extends Model {

    protected $fillable = [
      'leagueId',
      'status',
      'teams',
      'type',
      'timeLimit',
      'IDP',
    ];


  }

 ?>
