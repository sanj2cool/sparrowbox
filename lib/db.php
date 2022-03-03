<?php

define('HOST','localhost');
define('USER','root');
define('PASSWORD','');
define('DBS','api');
class db  {

    private $host=HOST;
    private $user=USER;
    private $pass=PASSWORD;
    private $database=DBS;

    private $stmt;
    private $error;
    private $con;

    public function __construct(){
       
        $dsn='mysql:host='.$this->host.';dbname='.$this->database;

        $options=array(
            PDO::ATTR_PERSISTENT=>true,
            PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION

        );

        try {
                $this->con=new PDO($dsn,$this->user,$this->pass,$options);
        }catch(PDOException $e ){
            $this->error=$e->getMessage();
        }


    }
    
    public function query($query){
        $this->stmt=$this->con->prepare($query);

    }

    public function execute(){
        return $this->stmt->execute();
    }

    public function showResults(){

            $this->execute();
            return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }




}