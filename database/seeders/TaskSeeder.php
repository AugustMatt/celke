<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;
use Carbon\Carbon;

class TaskSeeder extends Seeder
{
    /**
     * Executa a criação de registros na tabela tasks.
     */
    public function run(): void
    {
        Task::insert([
            [
                'name' => 'Tarefa 1',
                'started_at' => Carbon::now()->subDays(2),
                'finished_at' => Carbon::now()->subDay(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tarefa 2',
                'started_at' => Carbon::now()->subDay(),
                'finished_at' => Carbon::now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tarefa 3',
                'started_at' => Carbon::now()->subDays(2),
                'finished_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
