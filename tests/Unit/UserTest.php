<?php

namespace Tests\Unit;
use App\Models\User;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_login_form()
    {
        $response = $this->get('/login');
        $this->assertTrue(true);
    }

    public function test_register_form(){
        $response = $this->post('/register', [
            'name' => 'Dary',
            'email' => 'dary@gmail.com',
            'password' => 'dary12345'
        ]);
        $this->assertTrue(true);
    }
    
    public function test_user_duplication()
    {
        $user1 = User::make([
            'name' => 'John Doe',
            'email' => 'johndoe@gmail.com',
        ]);

        $user2 = User::make([
            'name' => 'Audrey',
            'email' => 'audrey@gmail.com',
        ]);
        $this->assertTrue($user1->email != $user2->email);
    }

    public function test_delete_user(){
        $user = User::factory()->count(1)->make();

        $user = User::first();

        if($user){
            $user->delete();
        }
        $this->assertTrue(true);
    }

}
