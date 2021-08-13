<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * <i class="far fa-square"></i> Task
     * <i class="far fa-calendar"></i> Event
     * <i class="far fa-sticky-note"></i> Note
     * <i class="fas fa-times"></i> Complete
     * <i class="fas fa-arrow-left"></i> Migrated to Future Log
     * <i class="fas fa-arrow-right"></i> Migrated to Tommorrow
     * <i class="fas fa-star"></i> Priority
     * <i class="fas fa-exclamation"></i> Inspiration
     *
     * @return void
     */
    public function run()
    {
        Type::create([
            'type' => 'task',
            'icon' => '<i class="far fa-square"></i>',
            'is_edit_only' => 0,
            'is_signifier' => 0,
        ]);

        Type::create([
            'type' => 'event',
            'icon' => '<i class="far fa-calendar"></i>',
            'is_edit_only' => 0,
            'is_signifier' => 0,
        ]);

        Type::create([
            'type' => 'note',
            'icon' => '<i class="far fa-sticky-note"></i>',
            'is_edit_only' => 0,
            'is_signifier' => 0,
        ]);

        Type::create([
            'type' => 'complete',
            'icon' => '<i class="fas fa-times"></i>',
            'is_edit_only' => 1,
            'is_signifier' => 0,
        ]);

        Type::create([
            'type' => 'migrate to future log',
            'icon' => '<i class="fas fa-arrow-left"></i>',
            'is_edit_only' => 1,
            'is_signifier' => 0,
        ]);

        Type::create([
            'type' => 'migrate to tomorrow',
            'icon' => '<i class="fas fa-arrow-right"></i>',
            'is_edit_only' => 1,
            'is_signifier' => 0,
        ]);

        Type::create([
            'type' => 'priority',
            'icon' => '<i class="fas fa-star"></i>',
            'is_edit_only' => 0,
            'is_signifier' => 1,
        ]);

        Type::create([
            'type' => 'inspiration',
            'icon' => '<i class="fas fa-exclamation"></i>',
            'is_edit_only' => 0,
            'is_signifier' => 1,
        ]);

        Type::create([
            'type' => 'canceled',
            'icon' => null,
            'prefix' => '<strike>',
            'suffix' => '</strike>',
            'is_edit_only' => 1,
            'is_signifier' => 0,
        ]);
    }
}
