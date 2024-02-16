<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(4)->create();

        // Users
        // User::create([
        //     'name' => 'Hikmal Falah',
        //     'email' => Str::random(10).'@gmail.com',
        //     'password' => Hash::make('password'),
        // ]);
        // User::create([
        //     'name' => 'Justina Xie',
        //     'email' => Str::random(10).'@gmail.com',
        //     'password' => Hash::make('password'),
        // ]);


        // Categories
        Category::create([
            'name'=>'Programming',
            'slug' => 'programming'
        ]);
        Category::create([
            'name'=>'Web Desain',
            'slug' => 'web-desain'
        ]);
        Category::create([
            'name'=>'Data Science',
            'slug' => 'data-science'
        ]);
        Category::create([
            'name'=>'Personal',
            'slug' => 'personal'
        ]);


        Post::factory(20)->create();


        // Posts
        // Post::create([
        //     'title'=>'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, nesciunt voluptatum! Sequi veritatis nihil beatae eum praesentium hic eveniet iste, accusantium natus vitae eos vel harum ullam laborum? Eius, id sit rem dolor veniam odio incidunt quasi quidem amet autem in.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, nesciunt voluptatum! Sequi veritatis nihil beatae eum praesentium hic eveniet iste, accusantium natus vitae eos vel harum ullam laborum? Eius, id sit rem dolor veniam odio incidunt quasi quidem amet autem in. Corporis ut facere rerum culpa asperiores cumque recusandae minima ea. In, similique vitae dolorum iste velit accusamus eveniet, voluptate, sunt nisi illum quaerat voluptatum ipsa ut quos pariatur dolore nemo dolores ipsam? Ipsa dolor numquam repellat iusto animi? Harum itaque iste aspernatur a excepturi doloremque magnam accusamus quis voluptatem possimus quasi vel facere non labore, alias nihil, neque provident magni, asperiores tempore? Enim ipsum hic quidem libero dicta illum fugiat! Eius reprehenderit amet, consectetur sapiente necessitatibus autem, culpa, illum odit eveniet expedita architecto! Esse inventore ea dignissimos expedita officia accusamus error omnis totam eos hic, excepturi suscipit, illum voluptatem. Earum saepe labore molestias ad. Dolorum non accusamus harum exercitationem?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title'=>'Judul ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, nesciunt voluptatum! Sequi veritatis nihil beatae eum praesentium hic eveniet iste, accusantium natus vitae eos vel harum ullam laborum? Eius, id sit rem dolor veniam odio incidunt quasi quidem amet autem in.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, nesciunt voluptatum! Sequi veritatis nihil beatae eum praesentium hic eveniet iste, accusantium natus vitae eos vel harum ullam laborum? Eius, id sit rem dolor veniam odio incidunt quasi quidem amet autem in. Corporis ut facere rerum culpa asperiores cumque recusandae minima ea. In, similique vitae dolorum iste velit accusamus eveniet, voluptate, sunt nisi illum quaerat voluptatum ipsa ut quos pariatur dolore nemo dolores ipsam? Ipsa dolor numquam repellat iusto animi? Harum itaque iste aspernatur a excepturi doloremque magnam accusamus quis voluptatem possimus quasi vel facere non labore, alias nihil, neque provident magni, asperiores tempore? Enim ipsum hic quidem libero dicta illum fugiat! Eius reprehenderit amet, consectetur sapiente necessitatibus autem, culpa, illum odit eveniet expedita architecto! Esse inventore ea dignissimos expedita officia accusamus error omnis totam eos hic, excepturi suscipit, illum voluptatem. Earum saepe labore molestias ad. Dolorum non accusamus harum exercitationem?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title'=>'Judul ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, nesciunt voluptatum! Sequi veritatis nihil beatae eum praesentium hic eveniet iste, accusantium natus vitae eos vel harum ullam laborum? Eius, id sit rem dolor veniam odio incidunt quasi quidem amet autem in.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, nesciunt voluptatum! Sequi veritatis nihil beatae eum praesentium hic eveniet iste, accusantium natus vitae eos vel harum ullam laborum? Eius, id sit rem dolor veniam odio incidunt quasi quidem amet autem in. Corporis ut facere rerum culpa asperiores cumque recusandae minima ea. In, similique vitae dolorum iste velit accusamus eveniet, voluptate, sunt nisi illum quaerat voluptatum ipsa ut quos pariatur dolore nemo dolores ipsam? Ipsa dolor numquam repellat iusto animi? Harum itaque iste aspernatur a excepturi doloremque magnam accusamus quis voluptatem possimus quasi vel facere non labore, alias nihil, neque provident magni, asperiores tempore? Enim ipsum hic quidem libero dicta illum fugiat! Eius reprehenderit amet, consectetur sapiente necessitatibus autem, culpa, illum odit eveniet expedita architecto! Esse inventore ea dignissimos expedita officia accusamus error omnis totam eos hic, excepturi suscipit, illum voluptatem. Earum saepe labore molestias ad. Dolorum non accusamus harum exercitationem?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title'=>'Judul ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, nesciunt voluptatum! Sequi veritatis nihil beatae eum praesentium hic eveniet iste, accusantium natus vitae eos vel harum ullam laborum? Eius, id sit rem dolor veniam odio incidunt quasi quidem amet autem in.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, nesciunt voluptatum! Sequi veritatis nihil beatae eum praesentium hic eveniet iste, accusantium natus vitae eos vel harum ullam laborum? Eius, id sit rem dolor veniam odio incidunt quasi quidem amet autem in. Corporis ut facere rerum culpa asperiores cumque recusandae minima ea. In, similique vitae dolorum iste velit accusamus eveniet, voluptate, sunt nisi illum quaerat voluptatum ipsa ut quos pariatur dolore nemo dolores ipsam? Ipsa dolor numquam repellat iusto animi? Harum itaque iste aspernatur a excepturi doloremque magnam accusamus quis voluptatem possimus quasi vel facere non labore, alias nihil, neque provident magni, asperiores tempore? Enim ipsum hic quidem libero dicta illum fugiat! Eius reprehenderit amet, consectetur sapiente necessitatibus autem, culpa, illum odit eveniet expedita architecto! Esse inventore ea dignissimos expedita officia accusamus error omnis totam eos hic, excepturi suscipit, illum voluptatem. Earum saepe labore molestias ad. Dolorum non accusamus harum exercitationem?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

    }
}
