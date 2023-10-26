<?php

use App\Models\Option;

function getOption($code){
    $option = Option::get_option($code);
    return $option;
}