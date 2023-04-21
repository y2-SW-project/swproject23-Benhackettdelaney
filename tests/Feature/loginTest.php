<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class loginTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_login()
    {
        $user = User::create([
            'name' => 'Brian',
            'email' => 'br@laravel.com',
            'password' => Hash::make('password'),
        ]);
    $response = $this->post('/login',[
        'email'=>'br@laravel.com',
        'password'=>'password',
    ]);
    $response->assertRedirect('/home');
       
    
       
    }
 

}
