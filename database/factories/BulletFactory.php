<?php

namespace Database\Factories;

use App\Models\Bullet;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Type;

class BulletFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Bullet::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $types = Type::where('is_signifier','!=',1)->get();
        if($types->isEmpty()) {
            Type::factor()->count(5)->create();
            $types = Type::where('is_signifier','!=',1)->get();
        }

        $type = $types->random();

        return [
            'content' => $this->faker->text(),
            'type_id' => $type->id,
            'signifier' => null,
            'date' => now(),
        ];
    }
}
