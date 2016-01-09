<?php
  namespace App\Http\Controllers;
  use App\User;
  use App\Http\Requests;

  class UserController extends Controller{

    public function __construct(){

    }

    public function getUsers(){
      $users = User::all();
      return $users;
    }

    public function addUser(Request $request){
      // Add a user
    }

    public function showUser($id){
      $user = User::findOrFail($id);
      return $user;
    }

    public function editUser($id){
      $user = User::findOrFail($id);
      return $user;
    }

    public function deleteUser($id){
      $user = User::delete($id);
      return $user;
    }
  }

 ?>
