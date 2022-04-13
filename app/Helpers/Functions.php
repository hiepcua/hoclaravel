<?php
function isUpperCase($value, $messenge, $fail){
    if($value != mb_strtoupper($value, 'UTF-8')){
        $fail($messenge);
    }
}