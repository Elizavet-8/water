<?php

namespace Database\Seeders;

use App\Models\Owner;
use Illuminate\Database\Seeder;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $owner = Owner::where('title', 'ООО НПП "ТОРАКВА"')->first();

        if (!$owner) {
            $owner = Owner::create([
                'title' => 'ООО НПП "ТОРАКВА"'
            ]);
        }
        $owner->save();
    }
}
