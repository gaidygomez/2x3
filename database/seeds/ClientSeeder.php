<?php

use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Client::class, 30)->create()->each(function (App\Client $client) {
            $client->payments([
                rand(1, 30)
            ]);
        });
    }
}
