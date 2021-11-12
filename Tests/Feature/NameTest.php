<?php

namespace Modules\Name\Tests\Feature;

use Modules\Name\Entities\Name;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class NameTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_save_a_name()
    {
        $name = Name::factory()->make()->toArray();

        $this->postJson('api/name', $name)
             ->assertStatus(201)
             ->assertJsonStructure([
                 'data' => [
                     'id',
                     'fullname',
                     'given_name',
                     'family_name',
                     'nickname'
                 ]
             ]);
    }

    /** @test */
    public function it_cannot_save_a_name()
    {
        $name = Name::factory()->make()
                    ->setAttribute('fullname', null)
                    ->toArray();

        $this->postJson('api/name', $name)
             ->assertStatus(422);
    }

    /** @test */
    public function it_can_update_a_name()
    {
        $name = Name::factory()->create()->toArray();
        $name['given_name'] = 'LARAVEL';

        $this->putJson('api/name/' . $name['id'], $name)
             ->assertSeeText("LARAVEL")
             ->isSuccessful();
    }

    /** @test */
    public function it_cannot_update_a_name()
    {
        $name = Name::factory()->create()->toArray();
        $name['fullname'] = null;

        $this->putJson('api/name/' . $name['id'], $name)
             ->assertJsonValidationErrors(['fullname'])
             ->assertStatus(422);
    }

    /** @test */
    public function it_can_delete_a_name()
    {
        $name = Name::factory()->create();

        $this->deleteJson('api/name/' . $name->id)
             ->assertStatus(200);
    }
}
