<?php

namespace Database\Seeders;

use App\Models\CampBenefit;
use Illuminate\Database\Seeder;

class CampBenefitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $campBenefits = [
            [
                'camp_id' => 1,
                'name' => 'Offline Mentoring'
            ],
            [
                'camp_id' => 1,
                'name' => 'Free Premium Tools'
            ],
            [
                'camp_id' => 1,
                'name' => 'Daily Assessment'
            ],
            [
                'camp_id' => 1,
                'name' => 'Real World Project'
            ],
            [
                'camp_id' => 1,
                'name' => 'Soft Skills'
            ],
            [
                'camp_id' => 1,
                'name' => 'Career Support'
            ],
            [
                'camp_id' => 1,
                'name' => 'Job Distribution'
            ],
            [
                'camp_id' => 1,
                'name' => 'Camp Certification'
            ],
            [
                'camp_id' => 2,
                'name' => 'Daily Assessment'
            ],
            [
                'camp_id' => 2,
                'name' => 'Real World Project'
            ],
            [
                'camp_id' => 2,
                'name' => 'Soft Skills'
            ],
            [
                'camp_id' => 2,
                'name' => 'Camp Certification'
            ],
        ];

        foreach ($campBenefits as $key => $campBenefit) {
            CampBenefit::create($campBenefit);
        }
    }
}
