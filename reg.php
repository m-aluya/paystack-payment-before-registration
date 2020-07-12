<?php
session_start();
function registration(){
    if(isset($_SESSION['accountForm'])){
        $firstName = $_SESSION['accountForm']['firstName'];
        $lastName = $_SESSION['accountForm']['lastName'];
        $email = $_SESSION['accountForm']['emailAddress'];
        $amount = $_SESSION['accountForm']['amount'];
        
                
        //write sql to save data to data base
        
        
        //if sql is successful, echo message here
        
        //echo 'Your account has been created';
        echo json_encode($_SESSION['accountForm']);
    }
}

if(isset($_GET['account'])){
  registration();
 
    
}
