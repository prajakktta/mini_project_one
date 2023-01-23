<?php
class User
{
    public function __construct()
    {
        echo "constructor called";
    }
    public function register()
    {
        echo 'User Registered';
    }
    public function login($username, $password)
    {
        echo $username.'is now logged in';
    }
    public function auth_user($username, $password)
    {
        echo $username.'is authenticated ';
    }
    public function _destruct()
    {
        echo 'Destructor Called';
    }
}
$User = new User;
$User->register();
//$User->login('brad','1234');