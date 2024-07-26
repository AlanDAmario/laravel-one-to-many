<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str; //importazione sluge

use function PHPSTORM_META\type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //SVUOTA TABELLA PRIMA DI POPOLARLA
        Type::truncate();

        //ARRAY DI PARTENZA
        $types = ['Frontend', 'Backend', 'AI', 'Data Analytics', 'Fullstack'];

        //CREARE UN RECORD DELLA TABELLA ATTRAVERSO UN CICLO
        foreach ($types as $type) {
           //creare un instance del modello, NEWTYPE ASSEGNATO PER NON ANDARE IN CONFLITTO CON I NOMI
           $newType = new Type();

           $newType->type = $type;
           $newType->slug = Str::of($newType->type)->slug();
           //salvare il record nella tabella
           $newType->save();
        }
    }
}
