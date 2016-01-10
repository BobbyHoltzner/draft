<?php
  namespace App;

  use Illuminate\Database\Eloquent\Model;

  class Selection extends Model{

    protected $fillable = [
      'userId',
      'playerId',
      'draftId',
    ];
  }

 ?>
