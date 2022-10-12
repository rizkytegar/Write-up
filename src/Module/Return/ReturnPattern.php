<?php

namespace pino\Library\Module\Return;

/* 
|-----------------------------------------------------------------------|
|   Don't change anything in the dependency, because the changes you    | 
|   saved can be deleted when you update the dependency.                | 
|   If you have any other ideas, post them on the Pino-Library github.  |
|-----------------------------------------------------------------------|
*/

class ReturnPatttern{

    function __construct()
    {

    }

    public static function Invalid($ModuleType){

        return 'Invalid Request or Configuration in '.$ModuleType;

    }
}
