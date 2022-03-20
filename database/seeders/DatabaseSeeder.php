<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(5)->create();

        // User::create([
        //     'name' => 'Naufal',
        //     'email' => 'naufal@example.com',
        //     'password' => bcrypt('admin')
        // ]);

        User::factory(5)->create();

        Category::create([
            'name' => 'Web Programing',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Web Desain',
            'slug' => 'web-desain'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'slug'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat est aspernatur repellendus mollitia ad quas alias modi, minus ut magni?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, vero ab. Minus quae, cum illum tempore quibusdam omnis. Maiores impedit consectetur, unde nihil esse aperiam ex odio. Ea ad voluptatum eos cupiditate provident nulla esse illo, facere earum quisquam tempora cumque quis consectetur. Ipsum ullam ab et similique commodi hic, nemo officia nihil odio, cupiditate necessitatibus fuga possimus fugit maiores soluta expedita. Vero veniam corporis mollitia aliquid nam deleniti culpa expedita quasi deserunt, repellat omnis quis quia, reiciendis, dolore ut fugit dicta consequuntur architecto libero perferendis dolorum a. Officiis provident, laborum aliquam consequuntur aliquid praesentium distinctio id repellendus minus tempore?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat est aspernatur repellendus mollitia ad quas alias modi, minus ut magni?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, vero ab. Minus quae, cum illum tempore quibusdam omnis. Maiores impedit consectetur, unde nihil esse aperiam ex odio. Ea ad voluptatum eos cupiditate provident nulla esse illo, facere earum quisquam tempora cumque quis consectetur. Ipsum ullam ab et similique commodi hic, nemo officia nihil odio, cupiditate necessitatibus fuga possimus fugit maiores soluta expedita. Vero veniam corporis mollitia aliquid nam deleniti culpa expedita quasi deserunt, repellat omnis quis quia, reiciendis, dolore ut fugit dicta consequuntur architecto libero perferendis dolorum a. Officiis provident, laborum aliquam consequuntur aliquid praesentium distinctio id repellendus minus tempore?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat est aspernatur repellendus mollitia ad quas alias modi, minus ut magni?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, vero ab. Minus quae, cum illum tempore quibusdam omnis. Maiores impedit consectetur, unde nihil esse aperiam ex odio. Ea ad voluptatum eos cupiditate provident nulla esse illo, facere earum quisquam tempora cumque quis consectetur. Ipsum ullam ab et similique commodi hic, nemo officia nihil odio, cupiditate necessitatibus fuga possimus fugit maiores soluta expedita. Vero veniam corporis mollitia aliquid nam deleniti culpa expedita quasi deserunt, repellat omnis quis quia, reiciendis, dolore ut fugit dicta consequuntur architecto libero perferendis dolorum a. Officiis provident, laborum aliquam consequuntur aliquid praesentium distinctio id repellendus minus tempore?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
