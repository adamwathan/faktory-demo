<?php

class AccountTest extends FunctionalTestCase
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
            'description' => 'Sweet badass paycheck!',
            'amount' => 10000,
        ]);

        $transaction2 = Transaction::create([
            'account_id' => $account->id,
            'description' => 'Latte',
            'amount' => -500,
        ]);

        $transaction3 = Transaction::create([
            'account_id' => $account->id,
            'description' => 'Chromecast',
            'amount' => -3700,
        ]);

        $this->assertEquals(5800, $account->balance);
    }
}
