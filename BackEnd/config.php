<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class db{

   public function connect(){

   return  new PDO('mysql:host=localhost; dbname=SessionRecording', 'root', '');

   }
}

?>