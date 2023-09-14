<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models
use App\Models\Comix;

class ComixSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comixs = config('comix');
        foreach ($comixs as $comixElement) {
           $comix = new comix();
           $comix->title = $comixElement['title'];
           $comix->description = $comixElement['description'];
           $comix->thumb = $comixElement['thumb'];
           $comix->price = $comixElement['price'];
           $comix->series = $comixElement['series'];
           $comix->sale_date = $comixElement['sale_date'];
           $comix->type = $comixElement['type'];
           $comix->artist = json_encode($comixElement['artists']);
           $comix->writers = json_encode($comixElement['writers']);

           $comix->save();
        }
    }
}
