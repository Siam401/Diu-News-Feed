<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Cat;
use App\Slider;


class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Cat1 = Cat::create([
            'name' => 'Sports',
        ]);
        $Cat2 = Cat::create([
            'name' => 'Business',
        ]);
        $Cat3 = Cat::create([
            'name' => 'Bangladesh',
        ]);
        $Cat4 = Cat::create([
            'name' => 'International',
        ]);

        $slider1 = Slider::create([
            'title' => 'Braking News',
            'image' => '1.jpeg'
        ]);

        $post1=Post::create([
            'title' =>'Defining Custom Intermediate Table Models',
            'content'=>'If you would like to define a custom model to represent the intermediate table of your relationship, you may call the using method when defining the relationship. Custom many-to-many pivot models should extend the Illuminate\Database\Eloquent\Relations\Pivot class while custom polymorphic many-to-many pivot models should extend the Illuminate\Database\Eloquent\Relations\MorphPivot class. For example, we may define a Role which uses a custom RoleUser pivot model.',
            'cat_id' => $Cat1->id,
            'image'=>'2019-07-13-14-41-50.jpg',
            'tag'=>'Bangladesh',
            'author'=>'Rejaul Karim Byron',
            'status'=>'Pin Post',
        ]);
        $post2=Post::create([
            'title' =>'India knock Tigers out of World Cup',
            'content'=>'Serena Williams delivered one of her most complete performances since returning to the game after the birth of her daughter to rout a helpless Maria Sharapova in the first round of the U.S. Open on Monday.',
            'cat_id' => $Cat2->id,
            'image'=>'2019-07-15-06-38-01.jpeg',
            'tag'=>'Bangladesh',
            'author'=>'Rejaul Byron',
            'status'=>'Pin Post',
        ]);
        $post3=Post::create([
            'title' =>'Ancient Iraqi city of Babylon designated UNESCO World Heritage Site',
            'content'=>'The High Court directs the Directorate of National Consumer Rights Protection (DNCRP) to launch a hotline in three months in order to receive the complaints from the consumers and to provide them service on emergency basis.',
            'cat_id' => $Cat3->id,
            'image'=>'2019-07-15-06-38-23.jpeg',
            'tag'=>'International',
            'author'=>'Karim Byron',
            'status'=>'Normal Post',
        ]);
        $post4=Post::create([
            'title' =>'Ancient Iraqi city of Babylon designated UNESCO World Heritage Site',
            'content'=>'The High Court today issued a rule asking the government to explain in four weeks why it should not be directed to compensate Tk 1 crore to the family of Taslima Begum Ranu who was killed in a mob beating at Badda area in Dhaka on July 20.',
            'cat_id' => $Cat4->id,
            'image'=>'2019-07-15-06-38-44.jpeg',
            'tag'=>'Business',
            'author'=>'Reuters',
            'status'=>'Pin Post',
        ]);
        $post5=Post::create([
            'title' =>'Hong Kong protest leaders arrested before weekend rallies',
            'content'=>'Demosisto, the political group of arrested pro-democracy activists Agnes Chow and Joshua Wong, said on Friday that the arrests were meant to "spread fear.When they are creating figures that lead the whole movement, they are creating common figures and telling the people that they are the leaders controlling everything, said Isaac Cheng, the Vice Chairperson of Demosisto.They want to get the so-called leaders of the movement, in order to let other people be afraid they’ll be next," Cheng said.',
            'cat_id' => $Cat4->id,
            'image'=>'2019-08-30-06-05-38.jpg',
            'tag'=>'Hong Kong',
            'author'=>'Thai Che',
            'status'=>'Pin Post',
        ]);
        $post6=Post::create([
            'title' =>'Living like a local was the big travel trend 5 years ago',
            'content'=>'We have been living in a great age of authentic and experiential travel where even the most mainstream hotel brands aim to help travelers eat, live and spa like a local," reads the report. "Travel experts now argue that transformational travel is the evolutionary wave, which does not discard the focus on authentic experiences, but takes it to a deeper emotional level',
            'cat_id' => $Cat2->id,
            'image'=>'2019-08-30-06-14-58.jpg',
            'tag'=>'Travel',
            'author'=>'Jack Ryan',
            'status'=>'Pin Post',
        ]);

    }
}
