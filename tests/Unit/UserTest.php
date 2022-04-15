<?php

namespace Tests\Unit;

use App\Models\User;
use Database\Factories\UserFactory;
use Encore\Admin\Form;
use Faker\Factory;
use Illuminate\Support\Facades\Hash;
//use PHPUnit\Framework\TestCase;

use Tests\TestCase;


class UserTest extends TestCase
{

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testStoreUser()
    {
        $factory = new UserFactory();
        $form    = new Form(new User());
        $input   = $factory->definition();
        $form->store($input);
        $this->assertDatabaseHas('users', [
            "email" => $input['email'],
            "name"  => $input['name'],
        ]);
    }

}
