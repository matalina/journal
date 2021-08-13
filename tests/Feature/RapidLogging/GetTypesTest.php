<?php

namespace Tests\Feature\RapidLogging;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Type;

class GetTypesTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     * @test
     * @return void
     */
    public function get_types_returns_json()
    {
        $this->withoutExceptionHandling();
        
        $types = Type::factory()->count(5)->create();
        
        $response = $this->get('api/types');

        $response->assertStatus(200);
        $content = json_decode($response->getContent(), true);
        
        $this->assertEquals(5, count($content['data']));
        $this->assertEquals($types->first()->type, $content['data'][0]['type']);
    }
}
