<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LectureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lectures')->insert([
            [ 
                'name' => 'PHP'
            ],
            [ 
                'name' => 'Java'
            ],
            [ 
                'name' => 'C'
            ],
            [ 
                'name' => 'Perl'
            ],
            [ 
                'name' => 'AWS'
            ],
            [ 
                'name' => 'LISP'
            ],
        ]);
    }
}
