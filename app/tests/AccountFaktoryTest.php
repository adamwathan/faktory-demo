<?php

class AccountFaktoryTest extends FunctionalTestCase
{
    public function test_can_calculate_balance()
    {
        $account = Faktory::build('account_with_transactions', function($f) {
            $f->name = "Something else";
            $f->transactions->quantity(4)->attributes([
                'amount' => [10000, -500, -3700, -200]
            ]);
        });

        dd($account->toJson());
        $this->assertEquals(5600, $account->balance);
    }
}
