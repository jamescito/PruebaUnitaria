<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_update()
    {
        $response = $this->put('/api/clientes/1', ['Nombre' => 'james','apellido' => 'Reyes']);

        $response
            ->assertStatus(200)
            ->assertJson([
                'mensaje'=>'Cliente editado exitosamente',
            ]);
    }

    public function test_delete()
    {
        $response = $this->delete('/api/clientes/3');

        $response
            ->assertStatus(200)
            ->assertJson([
                'mensaje'=>'Cliente eliminado exitosamente',
            ]);
    }
}
