<?php

namespace Database\Seeders;

use App\Helper\Helper;
use Illuminate\Database\Seeder;
Use App\Models\Fen;

class FenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array();
        $filename = public_path("/seeders/fen.txt");
        $file = fopen($filename,'r');
        while (!feof($file)){
            $content = fgets($file);
            $fen_char = explode("  ", $content);
            $data= $fen_char;
           // print_r($data[0]);
            FEN::create([
                'fen_char'=>$data[0],
            ]);

        }



    }
}
