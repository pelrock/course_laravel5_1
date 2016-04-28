<?php
use Illuminate\Foundation\Testing\DatabaseTransactions;

/**
 * Created by PhpStorm.
 * User: amartinsa
 * Date: 27/04/16
 * Time: 18:41
 */
class EditProfileTest extends TestCase
{
    use DatabaseTransactions;
    public function testEditProfile()
    {
        $user=$this->createUser();
        $this->actingAs($user)
            ->visit('account')
            ->click('Edit profile')
            ->seePageIs('account/edit-profile')
            ->type('Pelrock', 'name')
            ->press('Update profile')
            ->seePageIs('account')
            ->see('Your profile has been updatede')
            ->seeInDatabase('users', [
                'email'=>$user->email,
                'name'=>'Pelrock'
            ]});
    }



}