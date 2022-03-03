<?php

class template {

    protected $template;
    protected $vars=array();

    public function __construct($template){
        
        $this->template=$template;
        //echo $this->template;
    }

    public function __get($key) {
        return $this->vars[$key];
    }

    public function __set($key,$value){
        $this->vars[$key]=$value;
    }

    public function __toString(){
        //print_r($this->vars);
        extract($this->vars);
        chdir(dirname($this->template));
//echo dirname($this->template);
        ob_start();
        include basename($this->template);
        return ob_get_clean();

    }

}