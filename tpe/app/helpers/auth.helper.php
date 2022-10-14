<?php

class AuthHelper {


public function checkLoggedIn() {
   if (!isset($_SESSION['IS_LOGGED'])) {
    session_start();
       header("Location: " . BASE_URL . 'login');
       die();
   }
} 

public function checkInicio() {
    if(!isset($_SESSION)) { 
        session_start(); 
      } 
}
}