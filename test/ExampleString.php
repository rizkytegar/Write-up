<?php

// include autoload vendor
require_once __DIR__ . '/vendor/autoload.php';

// include Pino Library
use pino\Library\Pino;

/* 
|-----------------------------------------------------------------------------------|
|   Example Input Data, You can change the value of $data by request POST or GET.   |
|-----------------------------------------------------------------------------------|
*/
$data = '!@#$%^&*()_+{}|":<>?,./;\][=-just test string!#%^&*()123';

/* 
|-----------------------------------------------------------------------------------|
|   Example output, Data will be converted into a string.                           |
|-----------------------------------------------------------------------------------|
*/
return Pino::string($data);

// Output from $data : just test string123