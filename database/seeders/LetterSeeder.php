<?php

namespace Database\Seeders;

use App\Models\Letter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LetterSeeder extends Seeder
{
    /**
    * Run the database seeds.
    */
    public function run(): void
    {
        //
        $letters = [
            [
                'letter' => "T",
                'number' => 0 ,
            ],

            [
                'letter' => "R",
                'number' => 1 ,
            ],

            [
                'letter' => "W",
                'number' => 2 ,
            ],
            
            [
                'letter' => "A",
                'number' => 3 ,
            ],

            [
                'letter' => "G",
                'number' => 4 ,
            ],

            [
                'letter' => "M",
                'number' => 5 ,
            ],

            [
                'letter' => "Y",
                'number' => 6 ,
            ],

            [
                'letter' => "F",
                'number' => 7 ,
            ],

            [
                'letter' => "P",
                'number' => 8 ,
            ],

            [
                'letter' => "D",
                'number' => 9 ,
            ],

            [
                'letter' => "X",
                'number' => 10 ,
            ],
                
            [
                'letter' => "B",
                'number' => 11 ,
            ],

            [
                'letter' => "N",
                'number' => 12 ,
            ],

            [
                'letter' => "J",
                'number' => 13 ,
            ],

            [
                'letter' => "Z",
                'number' => 14 ,
            ],

            [
                'letter' => "S",
                'number' => 15 ,
            ],

            [
                'letter' => "Q",
                'number' => 16 ,
            ],

            [
                'letter' => "V",
                'number' => 17 ,
            ],
            
            [
                'letter' => "H",
                'number' => 18 ,
            ],

            [
                'letter' => "L",
                'number' => 19 ,
            ],

            [
                'letter' => "C",
                'number' => 20 ,
            ],

            [
                'letter' => "K",
                'number' => 21 ,
            ],

            [
                'letter' => "E",
                'number' => 22 ,
            ]
        ];
            foreach ($letters as $letter) {

                Letter::create($letter);
            }
    }
}
