<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Abdul Jalal',
            'username' => 'abduljalal',
            'email' => 'abdoeljalalexotic@gmail.com',
            'password' => bcrypt('123456')
        ]);
        // User::create([
        //     'name' => 'Putra Anggara',
        //     'email' => 'putraanggara@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        User::factory(3)->create();

        
        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Post Pertama',
        //     'slug' => 'judul-post-pertama',
        //     'excerpt' => 'lorem ipsum pertama',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error corporis, dolorem ratione cupiditate amet et quaerat unde optio alias. Consequuntur delectus sed obcaecati porro ab veniam alias, at, illo facere rem aspernatur itaque, deleniti ipsam commodi natus? Ea magni autem animi reiciendis eveniet commodi, architecto enim eligendi quo error ratione voluptatem beatae recusandae suscipit, impedit dignissimos! Vero quasi, voluptates commodi excepturi voluptate maiores maxime, laboriosam repudiandae necessitatibus architecto delectus corrupti rerum sunt sapiente quibusdam natus sint sit facere consequuntur repellendus explicabo! Magnam possimus nulla amet quaerat reiciendis nemo sit fugit labore aliquam hic. Molestias voluptatibus et, nesciunt cum consectetur unde.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Post Kedua',
        //     'slug' => 'judul-post-kedua',
        //     'excerpt' => 'lorem ipsum kedua',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error corporis, dolorem ratione cupiditate amet et quaerat unde optio alias. Consequuntur delectus sed obcaecati porro ab veniam alias, at, illo facere rem aspernatur itaque, deleniti ipsam commodi natus? Ea magni autem animi reiciendis eveniet commodi, architecto enim eligendi quo error ratione voluptatem beatae recusandae suscipit, impedit dignissimos! Vero quasi, voluptates commodi excepturi voluptate maiores maxime, laboriosam repudiandae necessitatibus architecto delectus corrupti rerum sunt sapiente quibusdam natus sint sit facere consequuntur repellendus explicabo! Magnam possimus nulla amet quaerat reiciendis nemo sit fugit labore aliquam hic. Molestias voluptatibus et, nesciunt cum consectetur unde.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Post Ketiga',
        //     'slug' => 'judul-post-ketiga',
        //     'excerpt' => 'lorem ipsum ketiga',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error corporis, dolorem ratione cupiditate amet et quaerat unde optio alias. Consequuntur delectus sed obcaecati porro ab veniam alias, at, illo facere rem aspernatur itaque, deleniti ipsam commodi natus? Ea magni autem animi reiciendis eveniet commodi, architecto enim eligendi quo error ratione voluptatem beatae recusandae suscipit, impedit dignissimos! Vero quasi, voluptates commodi excepturi voluptate maiores maxime, laboriosam repudiandae necessitatibus architecto delectus corrupti rerum sunt sapiente quibusdam natus sint sit facere consequuntur repellendus explicabo! Magnam possimus nulla amet quaerat reiciendis nemo sit fugit labore aliquam hic. Molestias voluptatibus et, nesciunt cum consectetur unde.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Post Keempat',
        //     'slug' => 'judul-post-keempat',
        //     'excerpt' => 'lorem ipsum keempat',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error corporis, dolorem ratione cupiditate amet et quaerat unde optio alias. Consequuntur delectus sed obcaecati porro ab veniam alias, at, illo facere rem aspernatur itaque, deleniti ipsam commodi natus? Ea magni autem animi reiciendis eveniet commodi, architecto enim eligendi quo error ratione voluptatem beatae recusandae suscipit, impedit dignissimos! Vero quasi, voluptates commodi excepturi voluptate maiores maxime, laboriosam repudiandae necessitatibus architecto delectus corrupti rerum sunt sapiente quibusdam natus sint sit facere consequuntur repellendus explicabo! Magnam possimus nulla amet quaerat reiciendis nemo sit fugit labore aliquam hic. Molestias voluptatibus et, nesciunt cum consectetur unde.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
