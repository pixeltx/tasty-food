<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Location;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Location::create([
            'name' => '',
            'address' => 'Paskal Hyper Square, Jl. Pasir Kaliki No.23, Arjuna, Kec. Cicendo, Kota Bandung, Jawa Barat 40172, Indonesia',
            'latitude' => -6.9150499,
            'longitude' => 107.5958171,
        ]);
    }
}
