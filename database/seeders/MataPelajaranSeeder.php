<?php

namespace Database\Seeders;

use App\Models\MataPelajaran;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MataPelajaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mapel = [
            "Matematika",
            "Fisika",
            "Biologi",
            "Kimia",
            "Ekonomi",
            "Sejarah",
            "Geografi",
            "Sosiologi",
            "Bahasa Indonesia",
            "Bahasa Inggris",
        ];
        $kelas = [10, 11, 12];

        foreach ($mapel as $mp){
            foreach ($kelas as $kls){
                MataPelajaran::create([
                    'nama' => $mp,
                    'slug' => Str::slug("$mp $kls"),
                    'kelas' => $kls,
                    'deskripsi' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."
                ]);
            }
        }
    }
}
