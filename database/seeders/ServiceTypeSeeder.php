<?php

namespace Database\Seeders;

use App\Http\Models\ServiceType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ServiceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id' => 1,
                'service_name' => 'Project Implementation',
                'sort_order' => 1,
            ],
            [
                'id' => 2,
                'service_name' => 'Consulting Services',
                'sort_order' => 2,
            ],
            [
                'id' => 3,
                'service_name' => 'Technical Advisory',
                'sort_order' => 3,
            ],
            [
                'id' => 4,
                'service_name' => 'Maturity Assignment',
                'sort_order' => 4,
            ],
            [
                'id' => 5,
                'service_name' => 'Training Services',
                'sort_order' => 5
            ],
            [
                'id' => 6,
                'service_name' => 'Software Development',
                'sort_order' => 6
            ],
            [
                'id' => 7,
                'service_name' => 'K3 Product',
                'sort_order' => 7
            ],
        ];

        \DB::table('bcm_service_types')->insert($data);
    }
}
