<?php

use Faker\Factory;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('task')->insert($this->getData());
    }

    public function getData(): array
    {
        $data = [];

        $faker = Faker\Factory::create('en_EN');

        for ($i = 0; $i < 10; $i++) {

            $data[] = [
                'title' => $faker->text(20),
                'description' => $faker->text(200),
                'status' => rand(1,3),
            ];
        }
        return $data;
    }
}
