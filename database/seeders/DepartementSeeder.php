<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DepartementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departements')->insert([
        ['nom'=> 'Comptabilité et Finance'
        ],
        ['nom'=> 'Ressources humaines'
        ],
        ['nom'=> 'Informatique'
        ],
        ['nom'=> 'Transit'
        ],
        ['nom'=> 'Recherche et Développement'
        ],
        ['nom'=> 'Commercial'
        ],
        ['nom'=> 'Production'
        ],
        ['nom'=> 'Service Client'
        ],
        ['nom'=> 'Ventes et Marketing'
        ]


        ]);
    }
}
