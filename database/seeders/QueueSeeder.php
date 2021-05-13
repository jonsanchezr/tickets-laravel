<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Queue;

class QueueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Queue::create([
            'name' => 'Queue 1',
        ]);

        Queue::create([
            'name' => 'Queue 2',
        ]);
    }
}
