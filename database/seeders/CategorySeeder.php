<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        ['nom'=> 'Cnps'
        ],
        ['nom'=> 'Extrait de naissance'
        ],
        ['nom'=> 'Carte Nationale d\'identité'
        ],
        ['nom'=> 'Diplome'
        ],
        ['nom'=> 'Curriculum vitæ'
        ],
        ]);
    }
}
