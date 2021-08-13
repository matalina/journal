<?php

namespace Tests\Feature\RapidLogging;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Bullet;
use Database\Seeders\TypeSeeder;

class GetBulletsTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @test
     * @return void
     */
    public function get_bullets_returns_json()
    {
        $this->withoutExceptionHandling();
        $this->seed(TypeSeeder::class);
        
        $bullets = Bullet::factory()->count(5)->create();
        
        $response = $this->get('api/bullets');

        $response->assertStatus(200);
        $content = json_decode($response->getContent(), true);
        
        $this->assertEquals(5, count($content['data']));
        $this->assertEquals($bullets->first()->content, $content['data'][0]['content']);
    }
}
