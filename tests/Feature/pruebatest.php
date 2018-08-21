<?php

namespace Tests\Feature;

use Tests\TestCase;

class pruebatest extends TestCase
{
    /**@test */
    public function it_loads_the_users_list_page()
    {
        $this->get('/usuario')
        ->assertStatus(200)
        ->assertSee('Usuarios');
    }

    /**@test*/
    public function it_loads_the_users_details_page()
    {
        $this->get('/usuario/5')
         ->assertStatus(200)
         ->assertSee('Mostrando Detalles');
    }

    /**@test */
    public function it_loads_the_new_users_page()
    {
        $this->get('/usuario/nuevo')
          ->assertStatus(200)
          ->assertSee('Crear nuevo usuario');
    }
}
