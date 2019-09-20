<?php

use Illuminate\Database\Seeder;
use App\Diupost;
use App\Diucat;

class DiupostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Cat1 = Diucat::create([
            'name' => 'Admission',
        ]);
        $Cat2 = Diucat::create([
            'name' => 'Library',
        ]);
        $Cat3 = Diucat::create([
            'name' => 'Summit',
        ]);

        $post1=Diupost::create([
            'title' =>'	DIU Chairman Presented Keynote Paper at BFCCI Annual Summit in Finland',
            'content'=>'More than two hundred representatives from business firms, academic institutions as well as Finnish ministries and over 20 Finnish companies/universities such as Nokia Networks, Fortum, Wärstilä, Reima, Tieto, Kone, Aalto University etc. participated in the event; and discussed the bi-lateral business potential and academic collaboration between Bangladesh and Finland. By this networking, Daffodil will be able to explore multiple benefits in the near future.',
            'diucat_id' => $Cat3->id,
            'image'=>'2019-07-15-06-38-01.jpeg',
            'tag'=>'summit',
            'author'=>'Diu',
            'status'=>'Pin Post',
        ]);
        $post2=Diupost::create([
            'title' =>'DIU Inter Section Programming Contest Summer 2019',
            'content'=>'Daffodil International University Computer and Programming Club (DIU CPC) organized ‘Inter Section Programming Contest Summer 2019’ in association with CSE Department on 20th August 2019 at Daffodil International University. DIUCPC with the inspiration of Prof. Dr. Syed Akhter Hossain (Head,Department of CSE,DIU) organized the largest team contest in the history of Daffodil International University.',
            'diucat_id' => $Cat2->id,
            'image'=>'2019-07-04-06-03-40.jpg',
            'tag'=>'library',
            'author'=>'Diu',
            'status'=>'Pin Post',
        ]);
        $post3=Diupost::create([
            'title' =>'Electrical and Electronic Engineering Club and EEE Alumni Association arranged “Alumni Talk 2019"',
            'content'=>'Electrical and Electronic Engineering Club in association with EEE Alumni Association of Daffodil International University organized “Alumni Talk 2019" on July 22, 2019 at 71 Milonayoton of the university The main objective of the program was to create a strong bonding between current students and the alumni. More than 50 alumni were present in this seminar that are doing job in different reputed organizations. Alumni have shared their real life experience about job sector, higher education in home and abroad.',
            'diucat_id' => $Cat1->id,
            'image'=>'2019-08-31-06-07-05.jpeg',
            'tag'=>'news',
            'author'=>'Diu',
            'status'=>'Normal Post',
        ]);
        
    }
}
