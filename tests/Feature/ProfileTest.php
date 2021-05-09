<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Livewire\Livewire;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProfileTest extends TestCase
{
    use RefreshDatabase;

    /** @test **/
    function can_see_livewire_profile_component_on_profile_page()
    {
        $user = User::factory()->make();

        $this->actingAs($user)
            ->get('/profile')
            ->assertSuccessful()
            ->assertSeeLivewire('profile');
    }

    /** @test **/
    function can_update_profile()
    {
        $user = User::Factory()->make();

        Livewire::actingAs($user)
            ->test('profile')
            ->set('lastname', 'Doe')
            ->set('firstname', 'John')
            ->set('username', 'jdoe')
            ->set('about', 'bar bar bar')
            ->call('save');
        
            $user->refresh();

            $this->assertEquals('Doe',$user->lastname);
            $this->assertEquals('John',$user->firstname);
            $this->assertEquals('jdoe',$user->username);
            $this->assertEquals('bar bar bar',$user->about);
    }
}
