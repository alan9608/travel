<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Livewire\Livewire;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RegisterTest extends TestCase
{
    use RefreshDatabase;

    public function test_get_register_page()
    {
        $response = $this->get('/register');
        $response->assertStatus(200);
    }

    /** @test */
   function registration_page_contains_livewire_component()
   {
        $this->get('/register')
        ->assertSuccessful()
        ->assertSeeLivewire('auth.register');
}

    function can_register()
    {
        $email = 'eawilson@ualberta.ca';

        Livewire::test('auth.register')
            ->set('email',$this->email)
            ->set('password','secret')
            ->set('passwordConfirmation', 'secret')
            ->call('register')
            ->assertRedirect('/');

        $this->assertTrue( User::whereEmail($this->email)->exists() );
        $this->assertEquals($this->email, auth()->user()->email);

    }
    /** @test */
    function email_is_required()
    {
        Livewire::test('auth.register')
            ->set('email', '')
            ->set('password', 'secret')
            ->set('passwordConfirmation', 'secret')
            ->call('register')
            ->assertHasErrors(['email' => 'required']);
    }

    /** @test */
    function email_hasnt_been_taken_already()
    {
        User::create([
            'email' => 'alan9608@gmail.com',
            'password' => Hash::make('password'),
        ]);

        Livewire::test('auth.register')
            ->set('email', 'alan9608@gmail.com')
            ->set('password', 'secret')
            ->set('passwordConfirmation', 'secret')
            ->call('register')
            ->assertHasErrors(['email' => 'unique']);
    }
 /** @test */
 function see_email_hasnt_already_been_taken_validation_message_as_user_types()
 {
     User::create([
         'email' => 'alan9608@gmail.com',
         'password' => Hash::make('password'),
     ]);

     Livewire::test('auth.register')
         ->set('email', 'alan960@gmail.com')
         ->assertHasNoErrors()
         ->set('email', 'alan9608@gmail.com')
         ->assertHasErrors(['email' => 'unique']);
 }


    /** @test */
    function password_is_required()
    {
        Livewire::test('auth.register')
            ->set('email', 'alan9608@gmail.com')
            ->set('password', '')
            ->set('passwordConfirmation', 'secret')
            ->call('register')
            ->assertHasErrors(['password' => 'required']);
    }

   /** @test */
   function password_is_minimum_of_six_characters()
   {
       Livewire::test('auth.register')
           ->set('email', 'alan9608@gmail.com')
           ->set('password', 'secre')
           ->set('passwordConfirmation', 'secret')
           ->call('register')
           ->assertHasErrors(['password' => 'min']);
   }

    /** @test */
    function password_matches_password_confirmation()
    {
     Livewire::test('auth.register')
         ->set('email', 'alan9608@gmail.com')
         ->set('password', 'secret')
         ->set('passwordConfirmation', 'not-secret')
         ->call('register')
         ->assertHasErrors(['password' => 'same']);
    }


}