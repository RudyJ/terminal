<?php

require('json-rpc.php');


class banco{
    static $login_documentation = "return auth token";
    public function login($user, $passwd) {
      if (strcmp($user, 'rudy') == 0 && strcmp($passwd, '123') == 0) {
        // If you need to handle more than one user you can
        // create new token and save it in database
        return md5($user . ":" . $passwd);
      } else {
        throw new Exception("Wrong Password");
      }
    }
    
    public function check($ip){
        
        return "Você entrou no IP : \n".$ip;
        
    }
    
    public function go($ip){
        
        return $ip;
        
    }
    
    
}


    handle_json_rpc(new banco());

?>