<?php
class User {
    private $user_no;
    private $password;
    private $userType;


    function __construct(string $user_no,string $password, string $userType)
    {
        $this->user_no = $user_no;
        $this->password = $password;
        $this->userType = $userType;
    }

    function getData()
    {


        return $data [] = array(
            "user_no"=> $this->user_no,
            "password"=> $this->password,
            "userType"=> $this->userType
        );
    }





}


?>