<?php

class UserTest extends FunctionalTestCase
{
    public function test_can_calculate_balance()
    {
        $account = Faktory::create('account_with_transactions', function($f) {
            $f->transactions->quantity(3)->attributes([
                'amount' => [10000, -500, -3700]
            ]);
        });

        $this->assertEquals(5800, $account->balance);
    }
}
