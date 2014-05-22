<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface
{
    use Authenticatable;
    use PasswordResettable;

    protected $hidden = ['password'];

    public function calculateNetWorth()
    {
        return $this->accounts->sum('balance');
    }
}
