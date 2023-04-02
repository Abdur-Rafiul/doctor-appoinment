<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Department;
class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'PSYCHIATRY',
            ],
            [
                'name' => 'MICROBIOLOGY',
            ],
            [
                'name' => 'ORTHOPEDICS',
            ],
            [
                'name' => 'PEDIATRICS',
            ],
            [
                'name' => 'UROLOGY',
            ],
            [
                'name' => 'RESPIRATORY MEDICINE',
            ],
            [
                'name' => 'PEDIATRIC SURGERY',
            ],
            [
                'name' => 'DERMATOLOGY',
            ],
            [
                'name' => 'NEUROMEDICINE',
            ]
        ];
        Department::insert($data);
    }
}
