<?php

/**
 * Created by PhpStorm.
 * User: amartinsa
 * Date: 26/04/16
 * Time: 17:49
 */
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MenuTest extends TestCase
{
    use DatabaseMigrations;
    public function testAccountLink(){
        //guest users
        $this->visit('/')->dontsee('Account');
        // register users
        $user=factory(App\User::class)->create([
            'name'=>'Pelrock',
            'username' => 'pelrock',
            'email'=>'pelrock@pelrock.com',
            'role'=>'admin',
            'password'=>bcrypt('almasa'),
            'active'=> true
        ]);
        
        $this->actingAs($user)
             ->visit('/')
             ->see('Account');
        
        $this->click('Account')
             ->seePageIs('account')
             ->see('My account');
    }
}