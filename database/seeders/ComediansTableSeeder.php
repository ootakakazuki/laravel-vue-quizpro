<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComediansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
            
    public function run()
    {
        $comedian_names = [
            'aaa',
            'bb',
            'cc',
            'dd',
            'ee',            
        ];

        foreach($comedian_names as $comedian_name)
        {
            \App\Models\Comedian::create([
                'name' => $comedian_name
            ]);
        }
    }
}
