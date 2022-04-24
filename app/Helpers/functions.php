<?php

function generateTransactionHash($table, $column, $length) {
    $hash = bin2hex(random_bytes($length));
    $check_hash_exist = $table->where($column, $hash)->first();

    if($check_hash_exist) {
        generateTransactionHash($table, $column, $length);
    }

    return $hash;
}

function addDaysToDate($dateString, String $days) {
    $date = date_create($dateString);
    date_add($date, date_interval_create_from_date_string($days . ' days'));
    return date_format($date, 'Y-m-d H:i:s');
}

function isUpTo24Hours($datefromdatabase) {
    $timefromdatabase = strtotime($datefromdatabase);
    $dif = time() - $timefromdatabase;

    return $dif >= 86400;
}
