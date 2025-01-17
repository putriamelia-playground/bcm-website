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
                'sort_order' => 1,
            ],
            [
                'id' => 2,
                'bcm_service_type_id' => 2,
                'service_subtype_name' => 'BCMS',
                'sort_order' => 2,
            ],
        ];

        \DB::table('bcm_service_subtypes')->insert($data);
    }
}
