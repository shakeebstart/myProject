<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
          [  'name'=>'cv template',
            'description'=>'simple and welll coded template',
            'gallery'=>'https://binaries.templates.cdn.office.net/support/templates/en-gb/lt16402487_quantized.png'
        ],
        [ 'name'=>'project template',
        'description'=>'best and easy to use',
        'gallery'=>'https://assets.website-files.com/603fbb650184a06b268ce08b/6251a9c162c172f1419b3cbc_ProjectPlan.png'
    ],
    ['name'=>'ads template',
    'description'=>'more attracting',
    'gallery'=>'https://d1csarkz8obe9u.cloudfront.net/posterpreviews/business-ads-design-template-be6d9131564f6f8d391ae81eb3ce55dc_screen.jpg?ts=1613467699'
],
        ]); 
    }
}
