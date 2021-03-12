<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Seeder;
use App\Models\ImagesModel;

class ImagesModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $imagepaths = Storage::allFiles();
        unset ($imagepaths[0], $imagepaths[1]);

        do {
            $img = array_shift($imagepaths);
            $img = new ImagesModel(['path' => explode('/', $img)[1]]);
            $img->save();
        }
        while ($imagepaths);
    }
}
