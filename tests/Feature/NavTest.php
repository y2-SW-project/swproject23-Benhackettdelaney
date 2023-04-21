<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class NavTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_NewRelease_showpage()
    {
        $response = $this->get('/newreleases/8');

        $response->assertStatus(200);
    }
    public function test_NewRelease_home()
    {
        $response = $this->get('/newreleases');

        $response->assertStatus(200);
    }

    
    public function test_Movie_home()
    {
        $response = $this->get('/movies');

        $response->assertStatus(200);
    }

    public function test_Movie_showpage()
    {
        $response = $this->get('/movies/1');

        $response->assertStatus(200);
    }

}
