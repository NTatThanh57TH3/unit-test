<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{

    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testLogin()
    {
        $this->browse(function(Browser $browser) {
            $browser->visit('https://develop.ko.edu.vn/login')
                ->type('username', "superadmin_dev")
                ->type('password', "123456a")
//                ->assertSee("als do not match our records.")
                ->screenshot("Test".time())
                ->visit('https://develop.ko.edu.vn/dashboard')
                ->click('a[href=""https://develop.ko.edu.vn/school"]')
                ->assertSee("als do not match our records.")
                ->assertSee("als do not match our records.")
                ->screenshot("Test".time());

        });
    }

}
