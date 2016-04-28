<?php

class TestCase extends Illuminate\Foundation\Testing\TestCase
{
    /**
     * The base URL to use while testing the application.
     *
     * @var string
     */
    protected $baseUrl = 'http://localhost';

    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

        return $app;
    }
    public function createUser($role='user') {
        return factory(App\User::class)->create([
            'name'=>'Pelrock',
            'username' => 'pelrock',
            'email'=>'pelrock@pelrock.com',
            'role'=>$role,
            'password'=>bcrypt('almasa'),
            'active'=> true
        ]);
    }
}
