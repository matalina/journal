<?php

namespace Tests\Feature\RapidLogging;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Http\Controllers\RapidLogging\BulletController;
use App\Http\Requests\RapidLogging\BulletStoreRequest;
use Database\Seeders\TypeSeeder;

class AddBulletTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     * @return void
     */
    public function add_bullet_validates_using_bullet_store_request()
    {
        $this->assertActionUsesFormRequest(
            BulletController::class,
            'store',
            BulletStoreRequest::class
        );
    }

    /**
     * @test
     * @return void
     */
    public function add_bullet_to_database()
    {
        $this->withoutExceptionHandling();
        $this->seed(TypeSeeder::class);

        $date =  now()->toDateString();
        $data = [
            'type_id' => 1,
            'content' => 'Test Task',
            'date' => $date,
            'signifier' => null,
        ];

        $response = $this->post('api/bullets', $data);

        $response->assertStatus(200);
        $response->assertJson([
            'success' => 1,
            'message' => 'Added bullet.'
        ], false);

        $this->assertDatabaseHas('bullets', $data);

        
    }
}
