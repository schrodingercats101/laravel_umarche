<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            [
                'owner_id' => '1',
                'filename' => 'sample.jpeg',
                'title' => null,
            ],
            [
                'owner_id' => '2',
                'filename' => 'sample2.jpeg',
                'title' => null,
            ],
            [
                'owner_id' => '3',
                'filename' => 'sample3.jpeg',
                'title' => null,
            ],
            [
                'owner_id' => '4',
                'filename' => 'sample4.jpeg',
                'title' => null,
            ],
            [
                'owner_id' => '4',
                'filename' => 'sample5.jpeg',
                'title' => null,
            ],
            [
                'owner_id' => '4',
                'filename' => 'sample6.jpeg',
                'title' => null,
            ],
        ]);
    }
}
