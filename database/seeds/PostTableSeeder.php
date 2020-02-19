<?php

use Illuminate\Database\Seeder;



class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => str_random(5),
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'title' => str_random(5),
            // 'author' => str_random(4).' '.str_random(5),
            'сategory' => str_random(6),
            'likes' => rand(2,10),

        ]);
    }
}



$body = '';
for ($i=0; $i < 20; $i++) {
    $body .= str_random(7);
    $body .= ' ';
    $body .= str_random(4);
}
