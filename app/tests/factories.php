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

Faktory::define(['user', 'User'], function($f) {
    $f->email = function($f, $i) {
        return 'example' . $i . '@example.com';
    };
    $f->password = Hash::make('foobar');
    $f->first_name = 'John';
    $f->last_name = 'Doe';
    $f->date_of_birth = new DateTime('1991-10-12');
    $f->phone_number = '555-555-5555';
    $f->street_address = '123 Fake St';
    $f->province = 'Ontario';
    $f->country = 'Canada';
    $f->postal_code = 'ABC123';

    $f->define('admin', function($f) {
        $f->is_admin = true;
    });
});
