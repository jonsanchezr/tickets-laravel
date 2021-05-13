<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::create([
        	'identity' => '123456789',
        	'name' => 'Gabriel',
        	'queue_id' => 1,
        ]);

        Client::create([
        	'identity' => '987654321',
        	'name' => 'Goku',
        	'queue_id' => 1,
        ]);

        Client::create([
        	'identity' => '567894321',
        	'name' => 'Ichigo',
        	'queue_id' => 2,
        ]);

        Client::create([
        	'identity' => '543216789',
        	'name' => 'Petter',
        	'queue_id' => 2,
        ]);
    }
}
