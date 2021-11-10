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

    public function test_index(){

        $response=$this->get('/api/cliente');

        $response
                ->assertStatus(200)
                ->assertJson([]);
    }

public function test_store(){

        $response=$this->post('/api/cliente',[
            'Nombre'=>'Jesler',
            'apellido'=>'Diaz',
            
        ]);

        $response
                ->assertStatus(200)
                ->assertJson([
                    'mensaje'=>'Cliente guardado exitosamente']);
    }

    public function test_update()
    {
        $response = $this->put('/api/clientes/1', ['Nombre' => 'Alberth','apellido' => 'Calderon']);

        $response
            ->assertStatus(200)
            ->assertJson([
                'mensaje'=>'Cliente editado exitosamente',
            ]);
    }

    public function test_delete()
    {
        $response = $this->delete('/api/clientes/2');

        $response
            ->assertStatus(200)
            ->assertJson([
                'mensaje'=>'Cliente eliminado exitosamente',
            ]);
    }
    
}
