<?php

namespace pino\Library;

use pino\Library\Module\Validation\ModuleValidation;
use pino\Library\Module\Database\ModuleDatabase;
use pino\Library\Module\Query\ModuleQuery;

/* 
|-----------------------------------------------------------------------|
|   This is the Pino Library Core System                                |
|   Please don't change anything here because it's a static method      |
|-----------------------------------------------------------------------|
*/

class Pino{

/* 
|-----------------------------------------------------------------------|
                               Pino Validation
|-----------------------------------------------------------------------|
*/
    public static function string($GetRequestData) {

        return ModuleValidation::GetString($GetRequestData);
        
    }

    public static function integer($GetRequestData) {

        return ModuleValidation::GetInteger($GetRequestData);
        
    }

/* 
|-----------------------------------------------------------------------|
                               Pino Database
|-----------------------------------------------------------------------|
*/

    public static function mysql($GetConfig) {

        return ModuleDatabase::MySQL($GetConfig);
        
    }

/* 
|-----------------------------------------------------------------------|
                               Pino Query
|-----------------------------------------------------------------------|
*/

    public static function select($GetQuery) {

        return ModuleQuery::Select($GetQuery);
        
    }
    public static function insert($GetQuery) {

        return ModuleQuery::Insert($GetQuery);
        
    }
    public static function update($GetQuery) {

        return ModuleQuery::Update($GetQuery);
        
    }
    public static function delete($GetQuery) {

        return ModuleQuery::Delete($GetQuery);
        
    }
}