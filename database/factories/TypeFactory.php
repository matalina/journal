<?php

namespace Database\Factories;

use App\Models\Type;
use Illuminate\Database\Eloquent\Factories\Factory;

class TypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Type::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $prefix = rand(0,1)?'<strike>':'';
        return [
            'type' => $this->faker->text(20),
            'icon' => '<i class="fas fa-question"></i>',
            'is_signifier' => rand(0,1),
            'is_edit_only' => rand(0,1),
            'prefix' => $prefix,
            'suffix' => $prefix == ''?'':'</strike>',
        ];
    }
}
