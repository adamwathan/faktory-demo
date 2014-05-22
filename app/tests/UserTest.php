<?php

class UserTest extends FunctionalTestCase
{
    public function test_admin_can_get_all_accounts()
    {
        $admin = User::create([
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
            'is_admin' => true
        ]);

        $account1 = Account::create([
            'user_id' => 1,
            'name' => 'Chequing',
            'account_number' => '1',
        ]);

        $account2 = Account::create([
            'user_id' => 2,
            'name' => 'Savings',
            'account_number' => '2',
        ]);

        $account3 = Account::create([
            'user_id' => 3,
            'name' => 'RRSP',
            'account_number' => '3',
        ]);

        $accounts = $admin->getAllAccounts();
        $this->assertEquals(3, count($accounts));
    }
}
