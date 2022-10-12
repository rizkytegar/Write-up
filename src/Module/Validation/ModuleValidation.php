<?php

namespace pino\Library\Module\Validation;

use pino\Library\Module\Return\ReturnPatten;

/* 
|-----------------------------------------------------------------------|
|   Don't change anything in the dependency, because the changes you    | 
|   saved can be deleted when you update the dependency.                | 
|   If you have any other ideas, post them on the Pino-Library github.  |
|-----------------------------------------------------------------------|
*/

class ModuleRegex{

    function __construct()
    {

    }
    public static function GetString($GetRequestData){

        if($GetRequestData){

            $GetRequestData = str_replace(' ', '-', $GetRequestData);
            $GetRequestData = preg_replace('/[^A-Za-z0-9-]/', '', str_replace(' ',' ',$GetRequestData));
            return str_replace('-', ' ', $GetRequestData);

        }else{

            return ReturnPattern::Invalid('Pino String');

        }
    }
    
    public static function GetInteger($GetRequestData){

        if($GetRequestData){
            
            return preg_replace('/[^0-9]/', '', $GetRequestData);
        
        }else{

            return ReturnPattern::Invalid('Pino Integer');

        }
    }
}
