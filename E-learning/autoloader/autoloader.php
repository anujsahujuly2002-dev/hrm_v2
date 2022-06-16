<?php
define('AUTOLOADING', true);


$autoloader['contact']='contact';




if(AUTOLOADING==true){
    foreach($autoloader as $fils => $path){
        include $path.'.php';
    }
}
  


?>