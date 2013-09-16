<?php

class UserController extends BaseController {


    public function validateNewUserData() {

        //$firstname = Input::get('firstname');
        //$lastname = Input::get('lastname');
        $email = Input::get('email');
        $username = Input::get('username');
        $messages = null;

        $emailValidator = Validator::make(
            array('email' => $email),
            array('email' => 'unique:users')
        );

        $usernameValidator = Validator::make(
            array('username' => $username),
            array('username' => 'unique:users')
        );

        if($emailValidator->fails()) {
            $messages = $emailValidator->messages();
            foreach($messages->all() as $message) {
                echo $message;
            }
        }

        if($usernameValidator->fails()) {
            $messages = $usernameValidator->messages();
            foreach($messages->all() as $message) {
                echo $message;
            }
        }

   
        /*$user->firstname = $firstname;
        $user->lastname = $lastname;
        $user->email = $email;
        $user->username = $username;

        $user->save();
        return Redirect::to('users');*/
    }

}