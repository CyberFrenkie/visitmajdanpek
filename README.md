Git clone ‘’ repositorijum link’’


Za laravel clone:
	composer install

	Kopiranje env example fajla unutar projecta nazvati ga samo env

	php artisan key:generate

	php artisan config:cache

	php artisan serve


git fetch --prune                                      Povlaci promene sa repo i update local

git merge --ff-only origin/master                      spajanje sa master stablom

git checkout -b "nova grana"                           kreiranje nove grane i automatski prelazak na nju

promene na projektu


git cola                                               otvaranje git cole cuvanje promena i comit na projektu
   - ctrl+s 
   - dodaj komentar
   -commit


git push origin HEAD:refs/heads/"grana"                pushuje izmene

Create pull request for aboutUpdate: idi na link       preko linka ide se za pul request


-------------------------------------------------------------------------------------------------

  PRE MERGA PROVERITI GRANE NA GITHUB-u DA LI JE NEKO VEC NESTO RADIO  UKOLIKO NIJE NASTAVITI

-------------------------------------------------------------------------------------------------

pa na merge dugme                                      merge dugme sam prihvatas i spajas sa glavnim stablom

git checkout master                                    povratak na master stablo




                                            REBASE

git fetch --prune                                      provera izmena


git merge --ff-only origin/master                      spajanje izmena sa master stablom  i na lokalu

git checkout -b "nova grana"                           kreiranje nove grane i automatski prelazak na nju

promene na projektu


git cola                                               otvaranje git cole cuvanje promena i comit na projektu
   - ctrl+s 
   - dodaj komentar
   -commit


git push origin HEAD:refs/heads/"grana"                pushuje izmene

-------------------------------------------------------------------------------------------------

  PRE MERGA PROVERITI GRANE NA GITHUB-u DA LI JE NEKO VEC NESTO RADIO  UKOLIKO JESTE
-------------------------------------------------------------------------------------------------



          git rebase --rebase-merges origin/master

          git push --force

git checkout master


git branch -d "ime grane"

------------------------------------------------------------------------------------------------------------


===== Sass i VITE =====

Otvoriti terminal/command prompt unutar projekta i kucati:

	npm install        -instaliracnje preprocesora
	
	npm add -D sass    -dodavanje sass-a

	composer require laravel/ui   - kreiranje ui okruzenja

	php artisan ui bootstrap      - dodavanje bootstrapa u okruzenje
	
	npm install                   - instaliranje u preprocesoru

	npm run dev                   - kompajliranje



U header sekciji umesto <link> ka sass fajlu kopiraj sledecu liniju:

	@vite(['resources/sass/app.scss', 'resources/js/app.js'])


Prilikom svakog modifikovanja i testiranja projekta neophodno je pokrenuti kompajler za VITE i naravno server:

	cmd1/terminal1: php artisan serve

	cmd2/terminal2: npm run dev

 ------------------------------------------------------------------------------------------------------------



 XAMP or LAMP required 

 Apache server, Mysql database, PHP

 Nakon instalacije i povezivanja sa MySql serverom nu terminalu ili CMD-u pozicionirati se unutar foldera sa projketom i ookrenuti:

 php artisan migrate
 
 php artisan migrate:refresh --seed
