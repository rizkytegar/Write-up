<?php

namespace pino\Library;

use pino\Library\Module\ModuleRegex;
use pino\Library\Module\DatabaseConnection;
use pino\Library\Module\QueryPatttern;

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

        return ModuleRegex::GetString($GetRequestData);
        
    }

    public static function integer($GetRequestData) {

        return ModuleRegex::GetInteger($GetRequestData);
        
    }

/* 
|-----------------------------------------------------------------------|
                               Pino Database
|-----------------------------------------------------------------------|
*/

    public static function mysql($GetConfig) {

        return DatabaseConnection::MySQL($GetConfig);
        
    }

    public static function pgsql($GetConfig) {

        return DatabaseConnection::PostgreSQL($GetConfig);
        
    }

/* 
|-----------------------------------------------------------------------|
                               Pino Query
|-----------------------------------------------------------------------|
*/

    public static function select($GetQuery) {

        return QueryPatttern::Select($GetQuery);
        
    }
    public static function insert($GetQuery) {

        return QueryPatttern::Insert($GetQuery);
        
    }
    public static function update($GetQuery) {

        return QueryPatttern::Update($GetQuery);
        
    }
    public static function delete($GetQuery) {

        return QueryPatttern::Delete($GetQuery);
        
    }
}