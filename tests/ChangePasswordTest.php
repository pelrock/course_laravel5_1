<?php

/**
 * Created by PhpStorm.
 * User: amartinsa
 * Date: 28/04/16
 * Time: 18:43
 */
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ChangePasswordTest extends TestCase
{
    use DatabaseMigrations;
    public function testChangePassword() 
    {
        $user=$this->createUser();
        $this->actingAs($user)
            ->visit('account')
            ->click('Change password')
            ->seePageIs('account/password')
            ->type('almasa', 'current_password')
            ->type('newpasword', 'password')
            ->type('newpasword', 'password_confirmation')
            ->press('Change Password')
            ->seePageIs('account')
            ->see('Your password has been change');
        
        $this->assertTrue(
            Hash::check('newpassword', $user->password),
            'The user password was not changed'
        );
    }
}