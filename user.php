<?php
  class user{
    protected $email;
    protected $password;
    protected $userData;

    public function __construct($email, $password){
      $this->userData=[
        (object)[
          'username' => 'Nabila',
          'email' => "nabilarizqi@gmail.com",
          'password' => "123",
          'role' => "admin"
        ],
        (object)[
          'username' => 'Customer',
          'email' => "customeraccount@gmail.com",
          'password' => "123",
          'role' => "customer"
        ],
        (object)[
          'username' => 'Customer',
          'email' => "customer@gmail.com",
          'password' => "123",
          'role' => "customer"
        ],
        
      ];
      $this->email = $email;
      $this->password = $password;
    }

    protected function auth(){
      foreach($this->userData as $key => $value){
        if($value->email == $this->email && $value->password == $this->password ){
          return $value;
        }
      }
      return false;
    }

    public function login(){
      $isUser = $this->auth();
      if($isUser){
        return $data = $isUser->username;
      } else {
        return false;
      }
    }
  }
?>
