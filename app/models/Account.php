<?php

class Account extends Eloquent
{
    public function user()
    {
        return $this->belongsTo('User');
    }

    public function transactions()
    {
        return $this->hasMany('Transaction');
    }

    public function getBalanceAttribute()
    {
        return $this->transactions->sum('amount');
    }
}
