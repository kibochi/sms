<?php

namespace Tests\Unit;


use Tests\TestCase;

class simpleTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
       $response = $this->get('/');

       $response->assertStatus(200);
    }
}