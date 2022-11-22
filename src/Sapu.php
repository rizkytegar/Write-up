<?php

namespace pino\Library;

use pino\Library\Module\Integer;
use pino\Library\Module\Entities;

/* 
|-----------------------------------------------------------------------|
|   This is the Sapi Library Core System                                |
|   Please don't change anything here because it's a static method      |
|-----------------------------------------------------------------------|
*/

class Sapu{
    public static function pi($GetRequestData) {

        return Integer::Load($GetRequestData);
        
    }

    public static function pe($GetRequestData) {

        return Entities::Load($GetRequestData);
        
    }
}