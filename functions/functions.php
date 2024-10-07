<?php

function createPassword ($lengthPassword){

        $characters = [ "abcdefghijklmnopqrstuvwxyz", "ABCDEFGHIJKLMNOPQRSTUVWXYZ", "0123456789", "&%?!=-^<>" ];
        $password = "";
        
        for( $i = 0 ; $i < $lengthPassword ; $i++){

            $randCharacters = rand(0,3);
            $length = strlen($characters[$randCharacters]) - 1;
            $password .= $characters[$randCharacters][rand(0, $length)];

        }
        return $password;
}

?>