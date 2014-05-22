<?php

class UserTest extends FunctionalTestCase
{
    public function test_can_get_net_worth()
    {
        $user = User::create([
            'email' => 'example@example.com',
            'password' => Hash::make('foobar'),
            'first_name' => 'John',
            'last_name' => 'Doe',
            'date_of_birth' => new DateTime('1991-10-12'),
            'phone_number' => '555-555-5555',
            'street_address' => '123 Fake St',
            'province' => 'Ontario',
            'country' => 'Canada',
            'postal_code' => 'ABC123',
        ]);

        $user->accounts = new Illuminate\Support\Collection([
            (object) ['balance' => 80000],
            (object) ['balance' => 40000],
            (object) ['balance' => 30000],
        ]);

        // $account1 = Account::create([
        //     'user_id' => $user->id,
        //     'name' => 'Chequing',
        //     'account_number' => '1',
        // ]);

        // $account2 = Account::create([
        //     'user_id' => $user->id,
        //     'name' => 'Savings',
        //     'account_number' => '2',
        // ]);

        // $account3 = Account::create([
        //     'user_id' => $user->id,
        //     'name' => 'RRSP',
        //     'account_number' => '3',
        // ]);


        $this->assertEquals(150000, $user->calculateNetWorth());
    }
}
