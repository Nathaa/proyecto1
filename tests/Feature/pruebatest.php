<?php

namespace Tests\Feature;

use Tests\TestCase;

class pruebatest extends TestCase
{
    /**@test */
    public function it_shows_the_users_list()
    {
        $this->get('/usuario')
        ->assertStatus(200)
        ->assertSee('Listado de usuarios')
        ->assertSee('joel')
        ->assertSee('Ellie');
    }

    /**@test */
    public function it_shows_a_default_message_if_the_users_list_is_empty()
    {
        $this->get('/usuario?empty')
        ->assertStatus(200)
        ->assertSee('No hay usuarios registrados');
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
