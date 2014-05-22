<?php

Faktory::define(['account', 'Account'], function($f) {
    $f->user_id = 1;
    $f->name = 'Chequing';
    $f->account_number = function($f, $i) {
        return $i;
    };

    $f->define('account_with_transactions', function($f) {
        $f->transactions = $f->hasMany('transaction', 3);
    });
});

Faktory::define(['transaction', 'Transaction'], function($f) {
    $f->account_id = 1;
    $f->description = 'Starbucks';
    $f->amount = 1000;
});
