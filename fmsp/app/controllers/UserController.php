<?php

class UserController extends BaseController {


    public function validateNewUserData() {

        $rules = array(
            //Required validations
            'firstname' => 'required|min:5|alpha_num',
            'lastname' => 'required|min:5|alpha_num',

            //Unique validations
            'username' => 'required|unique:users|alpha_num',
            'email' => 'required|unique:users'

        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails())
        {
            return Redirect::to('newUser')->withErrors($validator)->withInput(Input::except('password', 'confirm_password'));
        }

        if ($validator->passes())
        {
            $user = new User;

            $user->firstname = Input::get('firstname');
            $user->lastname = Input::get('lastname');
            $user->email = Input::get('email');
            $user->username = Input::get('username');
            $user->save();

            return Redirect::to('users');
        }
    }

}