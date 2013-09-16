<?php

class UserController extends BaseController {


    public function newUser() {
        $user = new User;
        $firstname = Input::get('firstname');
        $lastname = Input::get('lastname');
        $email = Input::get('email');
        $username = Input::get('username');

        $user->firstname = $firstname;
        $user->lastname = $lastname;
        $user->email = $email;
        $user->username = $username;

        $user->save();
        return Redirect::to('users');
    }

}