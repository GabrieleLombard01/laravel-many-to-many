<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tecnologies = [
            ['label' => 'HTML', 'color' => 'danger'],
            ['label' => 'CSS', 'color' => 'info'],
            ['label' => 'ES6', 'color' => 'warning'],
            ['label' => 'Bootstrap', 'color' => 'dark'],
            ['label' => 'PHP', 'color' => 'primary'],
            ['label' => 'SQL', 'color' => 'secondary'],
            ['label' => 'Laravel', 'color' => 'danger'],
            ['label' => 'VueJS', 'color' => 'success'],
        ];

        foreach ($tecnologies as $tecnology) {
            $new_tecnology = new Technology();
            $new_tecnology->label = $tecnology['label'];
            $new_tecnology->color = $tecnology['color'];
            $new_tecnology->save();
        }
    }
}
