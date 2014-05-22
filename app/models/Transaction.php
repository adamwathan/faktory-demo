<?php

class Transaction extends Eloquent
{
    public function account()
    {
        return $this->belongsTo('Account');
    }
}
