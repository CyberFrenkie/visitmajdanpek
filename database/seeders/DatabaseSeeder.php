<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Sight;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Sight::create([
            'link' => '/',
            'img' => 'img/content/content.png',        
            'head' => 'header1',
            'par' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur alias veniam neque ratione beatae cupiditate fuga. Voluptatum iste est, facere, quis iusto, magnam non rem nostrum magni obcaecati quisquam sit.',
         
        ]);
        Sight::create([
            'link' => '/',
            'img' => 'img/content/content.png',        
            'head' => 'header2',
            'par' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur alias veniam neque ratione beatae cupiditate fuga. Voluptatum iste est, facere, quis iusto, magnam non rem nostrum magni obcaecati quisquam sit.',
         
        ]);
        Sight::create([
            'link' => '/',
            'img' => 'img/content/content.png',        
            'head' => 'header3',
            'par' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur alias veniam neque ratione beatae cupiditate fuga. Voluptatum iste est, facere, quis iusto, magnam non rem nostrum magni obcaecati quisquam sit.',
         
        ]);
        Sight::create([
            'link' => '/',
            'img' => 'img/content/content.png',        
            'head' => 'header4',
            'par' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur alias veniam neque ratione beatae cupiditate fuga. Voluptatum iste est, facere, quis iusto, magnam non rem nostrum magni obcaecati quisquam sit.',
         
        ]);
        Sight::create([
            'link' => '/',
            'img' => 'img/content/content.png',        
            'head' => 'header5',
            'par' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur alias veniam neque ratione beatae cupiditate fuga. Voluptatum iste est, facere, quis iusto, magnam non rem nostrum magni obcaecati quisquam sit.',
         
        ]);
        Sight::create([
            'link' => '/',
            'img' => 'img/content/content.png',        
            'head' => 'header6',
            'par' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur alias veniam neque ratione beatae cupiditate fuga. Voluptatum iste est, facere, quis iusto, magnam non rem nostrum magni obcaecati quisquam sit.',
         
        ]);
        Sight::create([
            'link' => '/',
            'img' => 'img/content/content.png',        
            'head' => 'header7',
            'par' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur alias veniam neque ratione beatae cupiditate fuga. Voluptatum iste est, facere, quis iusto, magnam non rem nostrum magni obcaecati quisquam sit.',
         
        ]);

    }
}
