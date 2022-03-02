<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Livewire\Livewire;

use App\Models\Details;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProfileTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /** @test */
    public function login_authenticates_and_redirects_user()
    {
        $user = User::Factory()->create();

        $response = $this->post(route('register'), [
            'email' => $user->email,
            'password' => $user->password,
            'passwordConfirmation' => $user->password,
        ]);
        $this->assertDatabaseHas('users', [
            'email' => $user->email
        ]);
        $response->assertRedirect(route('login'));
        // $this->assertAuthenticatedAs($user);
    }
    /** @test **/
    function can_see_livewire_user_component_on_profile_page()
    {
        $user = User::Factory()->create();
        $detail = Details::Factory()->for($user)->create();

        $this->actingAs($user)
        ->withoutExceptionHandling()
        ->get('/profile')
            ->assertSuccessful()
            ->assertSeeLivewire('profile');
    }

    /** @test **/
    function user_gets_detail_class()
    {

        $user = User::Factory()->create();
        $detail = Details::Factory()->create(['user_id' => $user->id]);

        // var_dump($user->details());
        // $detail = Details::factory()->for($user)->create();
        //dd($detail, $user);

        $this->assertInstanceOf(Details::class, $user->details);
    }


    /** @test **/
    // function can_update_profile()
    // {

    //     $user = User::Factory()->create();
    //     $detail = Details::Factory()->for($user)->create();

        // var_dump($user->details());
        // $detail = Details::factory()->for($user)->create();
        //dd($detail, $user);

    //     Livewire::actingAs($user)
    //         ->test('profile')
    //         ->set('firstname', 'John')
    //         // ->set($detail->birthday, '2001-03-23')
    //         // ->set($detail->about, 'bar bar bar')
    //         ->call('save')
    //         ->assertInstanceOf(Details::class, $user->details)
    //         // ->assertEquals('Doe',$detail->lastname);
    //         ->assertEquals('John','firstname');
    //         // $this->assertEquals('2001-03-23',$detail->birthday);
    //         // $this->assertEquals('bar bar bar',$detail->about);
    // }

     /** @test **/
     function username_can_only_be_14_characters()
     {
         $user = User::Factory()->create();

         Livewire::actingAs($user)
            ->test('profile')
            ->set('username', str_repeat('a',15))
            ->set('about','bar')
            ->call('save');
            // $this->assertEquals('bar','about');
     }

}
