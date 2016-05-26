<?php

/**
 * Created by PhpStorm.
 * User: amartinsa
 * Date: 10/05/16
 * Time: 18:18
 */
class AccessHandlerTest extends TestCase
{
    public function testCheck()
    {
        $this->assertTrue(
            Access::check('admin', 'editor'),
            'Admin users should have access to editor modules'
        );
        $this->assertTrue(
            Access::check('editor', 'user'),
            'Editors users should have access to user modules'
        );
        $this->assertTrue(
            Access::check('admin', 'admin'),
            'Admin users should have access to admin modules'
        );
        $this->assertFalse(
            Access::check('user', 'admin'),
            'Users should not have access to admin modules, routes, etc'
        );
    }
}