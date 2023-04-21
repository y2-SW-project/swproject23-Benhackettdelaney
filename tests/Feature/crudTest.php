<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Support\Facades\DB;
use App\Models\Movie;

class crudTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_Movies_create()
    {
            Movie::create([
            'age_group' => 14,
            'title' => 'rrrr',
            'description' => 'rrrr',
            'duration' => '100',
            'rating' => '4',
            'date' => '1994-06-23',
            'new_releases' => 0,
            'image_id' => 'Fury.png',
        ]);
        
        $this->assertDatabaseHas('movies',[
            'age_group' => 14,
            'title' => 'rrrr',
            'description' => 'rrrr',
            'duration' => '100',
            'rating' => '4',
            'date' => '1994-06-23',
            'new_releases' => 0,
            'image_id' => 'Fury.png',
        ]);
    }

    public function test_Movies_update()
    {
        $response = $this->get('/movies/1/edit');
     

            Movie::update([
            'age_group' => 14,
            'title' => 'rrrr',
            'description' => 'rrrr',
            'duration' => '100',
            'rating' => '4',
            'date' => '1994-06-23',
            'new_releases' => 0,
            'image_id' => 'Fury.png',
        ]);
        
        $this->assertDatabaseHas('movies',[
            'age_group' => 14,
            'title' => 'rrrr',
            'description' => 'rrrr',
            'duration' => '100',
            'rating' => '4',
            'date' => '1994-06-23',
            'new_releases' => 0,
            'image_id' => 'Fury.png',
        ]);
    }
    public function test_Movies_delete()
{
    // Create a new movie
    $movie = Movie::create([
        'age_group' => 14,
        'title' => 'rrrr',
        'description' => 'rrrr',
        'duration' => '100',
        'rating' => '4',
        'date' => '1994-06-23',
        'new_releases' => 0,
        'image_id' => 'Fury.png',
    ]);

    Movie::destroy($movie->id);

    $this->assertDatabaseMissing('movies', [
        'id' => $movie->id
    ]);
}
public function testReadData()

{

$data = DB::table('movies')->where('id', 4)->first();
$this->assertEquals($data->new_releases,0 );

}

}
