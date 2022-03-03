<?php 



spl_autoload_register('autoloads');

function autoloads($classes){

    require_once "lib/".$classes.".php";
}

