<?php

namespace Tests\Feature;

use Tests\TestCase;

class WelcomeUsersTest extends TestCase
{
    /**@test*/

    public function it_welcomes_users_with_nickname()
    {
        $this->get('saludo/natahly/culona')
        ->assertStatus(200)
        ->assertSee('Bienvenida Nathaly tu apodo es michu');
    }

    /**@test*/

    public function it_welcomes_users_without_nickname()
    {
        $this->get('saludo/natahly')
        ->assertStatus(200)
        ->assertSee('Bienvenida nathaly no tienes apodo es michu');
    }
}
