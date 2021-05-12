<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Livewire\Livewire;

use App\Models\Profile;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProfileTest extends TestCase
{
    use RefreshDatabase;
    
    /** @test **/
    function can_see_livewire_profile_component_on_profile_page()
    {
        $user = User::Factory()->create();
        $this->actingAs($user)
            ->get('/profile')
            ->assertSuccessful()
            ->assertSeeLivewire('profile');
    }

    /** @test **/
    function can_update_profile()
    {

        $user = User::Factory()->create();
        $profile = Profile::factory()->for($user)->create();

        dd($profile, $user);

        Livewire::actingAs($user)
            ->test('profile')
            ->set($profile->lastname, 'Doe')
            ->set($profile->firstname, 'John')
            ->set($profile->username, 'jdoe')
            ->set($profile->about, 'bar bar bar')
            ->call('save');
            $this->assertEquals('Doe',$profile->lastname);
            $this->assertEquals('John',$profile->firstname);
            $this->assertEquals('jdoe',$profile->username);
            $this->assertEquals('bar bar bar',$profile->about);
    }
}
