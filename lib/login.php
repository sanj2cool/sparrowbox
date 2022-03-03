<?php

class login {

    protected $db;

    public function __construct(){
        $this->db=new db;
        //print_r($this->db);
    }


    public function getUser(){
        $this->db->query(
            "select * from users"
        );
        //echo "function called";
        $result=$this->db->showResults();
       //print_r($result) ;
        return $result;

    }

}