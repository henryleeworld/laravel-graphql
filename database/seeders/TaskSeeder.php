<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        Task::factory()->count(50)->create();
    }
}
