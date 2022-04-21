<?php

namespace Tests\Unit;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testAPILogin()
    {
        $response = $this->withHeaders([
            'device_id'=>1,
            'Content-Type'=>'application/json',
            'device-type' =>123,
            'content-language'=>'vi'
        ])->postJson('http://centeronline.dev.center.edu.vn/api/v3/manager/login', ['username'=>'ST-71043','password'=>'123456','tenant_code' => 'quocvan']);
        $response->assertStatus(200);;
        $this->token='Bearer'.' '.$response->original['data']['token'];
        return $this->token;

    }
    public function test_that_true()
    {
        $this->assertTrue(true);
    }
}
