<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\News;
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

            'img' => 'img/content/Pecina/Rajkova_pećina.jpg',      
            'img1' => '/',      
            'img2' => '/',      
            'img3' => '/',

            'head' => 'Rajkova pećina',
            'head1' => '/',
            'head2' => '/',
            'head3' => '/',


            'par' => 'Rajkova pećina je jedna od najlepših pećina u Srbiji, udaljena 2 km od Majdanpeka. Sa dužinom od 
                    2304 m istraženih hodnika najduža je pećina u Srbiji.
                    Kroz 2304 m njenih pećinskih kanala, teče Rajkova reka. 
                    Pećina sadrži čitav sistem dvorana, kanala 
                    i hodnika, a odlikuje se i pećinskim nakitom u vidu stalaktita, stalagmita, stubova od snežno belog 
                    kristalnog kalcita.',

            

            'par1' => 'Pećina se sastoji iz Ponorskog i Izvorskog dela, od čega svaki ima svoj Rečni i Suvi horizont

                    Spajanjem suvog i rečnog kanala formirana kružna staza dužine čak 1410 m, ali je turistima za sada omogućen pristup 
                    u dužini od 750 m. Njen rečni horizont prvi je istražio Jovan Cvijić, a njegov rad nastaviće sedamdesetih godina 20. 
                    veka dr Radenko Lazarević u saradnji sa grupom speleologa iz Valjeva. R.Lazarević, sa članovima Speloološke grupe iz Valjeva i S. 
                    Dozica iz Instituta za šumarstvo, istraživali su, u dva termina čitavu Rajkovu pećinu. U prvoj fazi istražen je ponorski, 
                    a u drugoj fazi izvorski deo pećine. Rajkova pećina dobila je ime po hajduku Rajku, koji je opijao i pljačkao putnike, 
                    a svoje blago sakrivao u ovoj pećini.Postoji verovanje da je opljačkao silno blago i sakrio ga u ovoj pećini. 
                    Za blagom se i dalje traga. Dolazak do pećine je asfaltnim putem pored obale reke Mali Pek i veštačkog jezera Veliki zaton. 
                    Okolina Malog Peka bogata je mesovitom šumom bukve, javora i hrasta i predstavlja jedinstveno prirodno i speleološko bogatstvo.
                    
                    Temperatura pećine je stalnih 8 stepeni celzijusevih, a vlažnost vazduha 100% i zato se za posetu pećini preporučuje toplija 
                    garderoba čak i u letnjem periodu.
                    
                    Rajkova pećina je rečna, protočna pećina; kroz nju protiče istoimena reka, koja polazi od Kapetanskih livada i posle 
                    površinskog toka, dugog 3.625 m ponire ispod vertikalnog krečnjackog odseka, visokog 50-100 m, na kontaktu kristalnih 
                    škriljaca i gornjejurskih krečnjaka. Pojavljuje se na koti od 427,58 m. Površinski teče 22,5 m i spaja se sa Paskovom rekom. 
                    Od njih dve nastaje Mali Pek.
                    
                    Rajkova pećina sastojala se iz dve odvojene celine: Ponorske i Izvorske pećine, a svaka celina ima po dva horizonta: rečni i suvi.',
            'par2' => '/',
            'par3' => '/',

        ]);
        Sight::create([
            'link' => '/',
            'img' => 'img/content/content.png', 
            'img1' => '/',      
            'img2' => '/',      
            'img3' => '/',

            'head' => 'Header2',
            'head1' => '/',
            'head2' => '/',
            'head3' => '/',
            
            'par' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur alias veniam neque ratione beatae cupiditate fuga. Voluptatum iste est, facere, quis iusto, magnam non rem nostrum magni obcaecati quisquam sit.',
            'par1' => '/',
            'par2' => '/',
            'par3' => '/',
        ]);
        Sight::create([

            'link' => '/',

            'img' => 'img/content/content.png',
            'img1' => '/',      
            'img2' => '/',      
            'img3' => '/',
            
            
            'head' => 'header3',
            'head1' => '/',
            'head2' => '/',
            'head3' => '/',


            'par' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur alias veniam neque ratione beatae cupiditate fuga. Voluptatum iste est, facere, quis iusto, magnam non rem nostrum magni obcaecati quisquam sit.',
            'par1' => '/',
            'par2' => '/',
            'par3' => '/',
        ]);
        Sight::create([

            'link' => '/',

            'img' => 'img/content/content.png',
            'img1' => '/',      
            'img2' => '/',      
            'img3' => '/',
            
            
            'head' => 'header4',
            'head1' => '/',
            'head2' => '/',
            'head3' => '/',


            'par' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur alias veniam neque ratione beatae cupiditate fuga. Voluptatum iste est, facere, quis iusto, magnam non rem nostrum magni obcaecati quisquam sit.',
            'par1' => '/',
            'par2' => '/',
            'par3' => '/',
        ]);

        Sight::create([

            'link' => '/',

            'img' => 'img/content/content.png',
            'img1' => '/',      
            'img2' => '/',      
            'img3' => '/',
            
            
            'head' => 'header5',
            'head1' => '/',
            'head2' => '/',
            'head3' => '/',


            'par' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur alias veniam neque ratione beatae cupiditate fuga. Voluptatum iste est, facere, quis iusto, magnam non rem nostrum magni obcaecati quisquam sit.',
            'par1' => '/',
            'par2' => '/',
            'par3' => '/',
        ]);

        Sight::create([

            'link' => '/',

            'img' => 'img/content/content.png',
            'img1' => '/',      
            'img2' => '/',      
            'img3' => '/',
            
            
            'head' => 'header6',
            'head1' => '/',
            'head2' => '/',
            'head3' => '/',


            'par' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur alias veniam neque ratione beatae cupiditate fuga. Voluptatum iste est, facere, quis iusto, magnam non rem nostrum magni obcaecati quisquam sit.',
            'par1' => '/',
            'par2' => '/',
            'par3' => '/',
        ]);

        Sight::create([

            'link' => '/',
            
            'img' => 'img/content/content.png',
            'img1' => '/',      
            'img2' => '/',      
            'img3' => '/',
            
            
            'head' => 'header7',
            'head1' => '/',
            'head2' => '/',
            'head3' => '/',


            'par' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur alias veniam neque ratione beatae cupiditate fuga. Voluptatum iste est, facere, quis iusto, magnam non rem nostrum magni obcaecati quisquam sit.',
            'par1' => '/',
            'par2' => '/',
            'par3' => '/',
        ]);

        // News ---------------------------------------------------
        News::create([
            'link' => '/',
            'img' => 'img/content/news/news-default.jpg',     
            'head' => 'News 1',
            'par' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur alias veniam neque ratione beatae cupiditate fuga. Voluptatum iste est, facere, quis iusto, magnam non rem nostrum magni obcaecati quisquam sit.',
         
        ]);

        News::create([
            'link' => '/',
            'img' => 'img/content/news/news-default.jpg',      
            'head' => 'News 2',
            'par' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur alias veniam neque ratione beatae cupiditate fuga. Voluptatum iste est, facere, quis iusto, magnam non rem nostrum magni obcaecati quisquam sit.',
         
        ]);

        News::create([
            'link' => '/',
            'img' => 'img/content/news/news-default.jpg',        
            'head' => 'News 3',
            'par' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur alias veniam neque ratione beatae cupiditate fuga. Voluptatum iste est, facere, quis iusto, magnam non rem nostrum magni obcaecati quisquam sit.',
         
        ]);

        News::create([
            'link' => '/',
            'img' => 'img/content/news/news-default.jpg',        
            'head' => 'News 4',
            'par' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur alias veniam neque ratione beatae cupiditate fuga. Voluptatum iste est, facere, quis iusto, magnam non rem nostrum magni obcaecati quisquam sit.',
         
        ]);

        News::create([
            'link' => '/',
            'img' => 'img/content/news/news-default.jpg',       
            'head' => 'News 5',
            'par' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur alias veniam neque ratione beatae cupiditate fuga. Voluptatum iste est, facere, quis iusto, magnam non rem nostrum magni obcaecati quisquam sit.',
         
        ]);

        News::create([
            'link' => '/',
            'img' => 'img/content/news/news-default.jpg',       
            'head' => 'News 6',
            'par' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur alias veniam neque ratione beatae cupiditate fuga. Voluptatum iste est, facere, quis iusto, magnam non rem nostrum magni obcaecati quisquam sit.',
         
        ]);

        News::create([
            'link' => '/',
            'img' => 'img/content/news/news-default.jpg',       
            'head' => 'News 7',
            'par' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur alias veniam neque ratione beatae cupiditate fuga. Voluptatum iste est, facere, quis iusto, magnam non rem nostrum magni obcaecati quisquam sit.',
         
        ]);

    }
}
