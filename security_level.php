<?php
if(isset($_POST["form"]) && isset($_POST["security_level"]))    
{
    
    $security_level_cookie = $_POST["security_level"];
    
    switch($security_level_cookie)
    {

        case "0" :

            $security_level_cookie = "0";
            break;

        case "1" :

            $security_level_cookie = "1";
            break;

        case "2" :

            $security_level_cookie = "2";
            break;

        default : 

            $security_level_cookie = "0";
            break;

    }

      
    setcookie("security_level", $security_level_cookie, time()+60*60*24*365, "/", "", false, false);

    
    header("Location: " . $_SERVER["SCRIPT_NAME"]);
    
    exit;

}

if(isset($_COOKIE["security_level"]))
{

    switch($_COOKIE["security_level"])
    {
        
        case "0" :
            
            $security_level = "Low";
            break;
        
        case "1" :
            
            $security_level = "Medium";
            break;
        
        case "2" :
            
            $security_level = "High";
            break;

        default : 

            $security_level = "Low";
            break;

    }
    
}

else
{
     
    $security_level = "not set";
    
} 

?>