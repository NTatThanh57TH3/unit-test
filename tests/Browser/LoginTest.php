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
            $browser->visit('https://develop.ko.edu.vn/v4/login')
                ->type('username', "admin")
                ->type('password', "admin")
                ->click('button[type="submit"]')
                ->assertPathIs("admin");
        });
    }

}
