<?php

class UserTest extends FunctionalTestCase
{
    public function test_can_calculate_balance()
    {
        $account = Account::create([
            'user_id' => '1',
            'name' => 'Chequing',
            'account_number' => '123456',
        ]);

        $transaction1 = Transaction::create([
            'account_id' => $account->id,
            'description' => 'Chequing',
            'amount' => 10000,
        ]);

        $transaction2 = Transaction::create([
            'account_id' => $account->id,
            'description' => 'Savings',
            'amount' => -500,
        ]);

        $transaction3 = Transaction::create([
            'account_id' => $account->id,
            'description' => 'RRSP',
            'amount' => -3700,
        ]);

        $this->assertEquals(5800, $account->balance);
    }
}
