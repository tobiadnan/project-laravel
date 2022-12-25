<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Blog;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Toby',
            'email' => 'tobi@gmail.com',
            'password' => bcrypt('12345')
        ]);
        // User::create([
        //     'name'=>'Lala',
        //     'email'=>'lala.ti2019@mhs.rosma.ac.id',
        //     'password'=>bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Data Science',
            'slug' => 'datascience'
        ]);
        Category::create([
            'name' => 'Mechine Learning',
            'slug' => 'ml'
        ]);
        Category::create([
            'name' => 'Front-End',
            'slug' => 'frontend'
        ]);

        //create with factory
        Blog::factory(16)->create();

        // Blog::create([
        //     'title'=>'Artikel Pertama',
        //     'slug'=>'artikelpertama',
        //     'bagian'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet pariatur dignissimos tenetur voluptates eius similique expedita, sed officia illo eligendi iure veritatis voluptatum nihil ratione tempora, molestias, repellat minima id?',
        //     'body'=>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores odio distinctio, quod velit quisquam qui eos. Mollitia, adipisci quisquam iure earum sequi repellat? Officiis tenetur dolorum quidem hic assumenda. Quos.</p>  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum delectus eligendi numquam reiciendis modi. Odio, velit ex. Doloribus, voluptatem ea tenetur consectetur ullam libero dolorem rem dolore, dicta quo a. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero culpa ad laboriosam quos eaque ipsum non voluptate beatae sapiente, quaerat accusantium vel saepe placeat nobis, dolorem excepturi exercitationem molestias cumque.</p>',
        //     'user_id'=>1,
        //     'category_id'=>1
        // ]);
        // Blog::create([
        //     'title'=>'Artikel Kedua',
        //     'slug'=>'artikelkedua',
        //     'bagian'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet pariatur dignissimos tenetur voluptates eius similique expedita, sed officia illo eligendi iure veritatis voluptatum nihil ratione tempora, molestias, repellat minima id?',
        //     'body'=>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores odio distinctio, quod velit quisquam qui eos. Mollitia, adipisci quisquam iure earum sequi repellat? Officiis tenetur dolorum quidem hic assumenda. Quos.</p>  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum delectus eligendi numquam reiciendis modi. Odio, velit ex. Doloribus, voluptatem ea tenetur consectetur ullam libero dolorem rem dolore, dicta quo a. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero culpa ad laboriosam quos eaque ipsum non voluptate beatae sapiente, quaerat accusantium vel saepe placeat nobis, dolorem excepturi exercitationem molestias cumque.</p>',
        //     'user_id'=>1,
        //     'category_id'=>2
        // ]);
        // Blog::create([
        //     'title'=>'Artikel Ketiga',
        //     'slug'=>'artikelketiga',
        //     'bagian'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet pariatur dignissimos tenetur voluptates eius similique expedita, sed officia illo eligendi iure veritatis voluptatum nihil ratione tempora, molestias, repellat minima id?',
        //     'body'=>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores odio distinctio, quod velit quisquam qui eos. Mollitia, adipisci quisquam iure earum sequi repellat? Officiis tenetur dolorum quidem hic assumenda. Quos.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum delectus eligendi numquam reiciendis modi. Odio, velit ex. Doloribus, voluptatem ea tenetur consectetur ullam libero dolorem rem dolore, dicta quo a. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero culpa ad laboriosam quos eaque ipsum non voluptate beatae sapiente, quaerat accusantium vel saepe placeat nobis, dolorem excepturi exercitationem molestias cumque.</p>',
        //     'user_id'=>2,
        //     'category_id'=>1
        // ]);
        // Blog::create([
        //     'title'=>'Artikel Ke Empat',
        //     'slug'=>'artikelkeempat',
        //     'bagian'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet pariatur dignissimos tenetur voluptates eius similique expedita, sed officia illo eligendi iure veritatis voluptatum nihil ratione tempora, molestias, repellat minima id?',
        //     'body'=>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores odio distinctio, quod velit quisquam qui eos. Mollitia, adipisci quisquam iure earum sequi repellat? Officiis tenetur dolorum quidem hic assumenda. Quos.</p>  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum delectus eligendi numquam reiciendis modi. Odio, velit ex. Doloribus, voluptatem ea tenetur consectetur ullam libero dolorem rem dolore, dicta quo a. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero culpa ad laboriosam quos eaque ipsum non voluptate beatae sapiente, quaerat accusantium vel saepe placeat nobis, dolorem excepturi exercitationem molestias cumque.</p>',
        //     'user_id'=>2,
        //     'category_id'=>3
        // ]);
    }
}
