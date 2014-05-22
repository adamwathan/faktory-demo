<?php

class UserFaktoryTest extends FunctionalTestCase
{
    public function test_admin_can_get_all_accounts()
    {
        $admin = Faktory::create('admin');
        $accounts = Faktory::createList('account', 3);

        $accounts = $admin->getAllAccounts();
        $this->assertEquals(3, count($accounts));
    }
}
