<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ProfileTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                ->assertSee('Login')
                ->type('email','ka452@njit.edu')
                ->type('password','asdfasdf')
                ->press('Login')
                ->assertSee('Home');
              //  ->ClickLink('My Account')
           //     ->ClickLink('My Profile')
           //     ->assertSee('My Profile')
             //   ->assertSee('First Name')
               // ->assertSee('Last Name')
               // ->assertSee('Body');
               // ->ClickLink('My Account')
                //->ClickLink('Logout');
        });
    }
}
