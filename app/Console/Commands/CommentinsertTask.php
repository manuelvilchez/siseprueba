<?php

namespace App\Console\Commands;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Console\Command;
use Faker;

class CommentinsertTask extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'comment:insert';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Insert comentario cada hora a post aleatorio';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $faker = Faker\Factory::create();
        
        $randomPost = Post::orderByRaw("RAND()")->limit(1)->pluck('id');
        Comment::create([
            'posts_id'        => $randomPost[0],
            'name'        => $faker->text(),
            'email'        => $faker->text(),
            'body'        => $faker->text()
        ]);
        return 0;
    }
}
