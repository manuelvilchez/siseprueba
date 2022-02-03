<?php

namespace App\Console\Commands;

use App\Models\Post;
use Illuminate\Console\Command;
use GuzzleHttp\Client;

class PostInsert extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'post:insert';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Insertar Post desde Api';

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
        $client = new Client(); //GuzzleHttp\Client
        $url = "https://jsonplaceholder.typicode.com/posts";


        $response = $client->request('GET', $url, [
            'verify'  => false,
        ]);

        $rpt_posts = json_decode($response->getBody());

        foreach($rpt_posts as  $value){
            // $value = (array) $value;
            Post::create([
                'users_id'        => $value->userId,
                'title'        => $value->title,
                'body'        => $value->body
            ]);
        }
        $this->info('Insertado correctamente, exitoso');
        return 0;
    }
}
