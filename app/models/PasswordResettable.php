<?php

trait PasswordResettable
{
    public function getReminderEmail()
    {
        return $this->email;
    }
}
