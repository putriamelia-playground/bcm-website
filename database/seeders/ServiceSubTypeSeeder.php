<?php

namespace Database\Seeders;

use App\Models\ServiceSubType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSubTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id' => 1,
                'bcm_service_type_id' => 2,
                'service_subtype_name' => 'Manajemen Risiko',
                'service_subtype_slug' => 'manajemen-risiko',
                'service_subtype_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed luctus porttitor quam, a tristique purus sodales vel. Etiam tristique dolor vel lorem dignissim, at dapibus ex mollis.',
                'sort_order' => 1,
            ],
            [
                'id' => 2,
                'bcm_service_type_id' => 2,
                'service_subtype_name' => 'BCMS',
                'service_subtype_slug' => 'bcms',
                'service_subtype_desc' => 'Sed egestas rutrum purus, id gravida est maximus quis. Nulla eget est a arcu rhoncus venenatis. Donec facilisis, mi a iaculis dignissim, mauris risus euismod sapien, id ultricies ex turpis in metus. Pellentesque fermentum magna non posuere sagittis.',
                'sort_order' => 2,
            ],
            [
                'id' => 3,
                'bcm_service_type_id' => 3,
                'service_subtype_name' => 'Cyber Security',
                'service_subtype_slug' => 'cyber-security',
                'service_subtype_desc' => 'Sed egestas rutrum purus, id gravida est maximus quis. Nulla eget est a arcu rhoncus venenatis. Donec facilisis, mi a iaculis dignissim, mauris risus euismod sapien, id ultricies ex turpis in metus. Pellentesque fermentum magna non posuere sagittis.',
                'sort_order' => 3,
            ],
        ];

        \DB::table('bcm_service_subtypes')->insert($data);
    }
}
