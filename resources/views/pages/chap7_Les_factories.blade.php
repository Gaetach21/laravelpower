<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Les factories</title>
    </head>
    <body>
      <h1>Laravel8 les factories</h1>
  
<p>
Les <strong>factories</strong>, c'est une classe comme une usine qui va générer des données qu'on va inscrire dans notre base
de données et on va passer au travers des modèles générées précédemment.
</p>
  
<p>
<strong><u>Etape1</u></strong>: créer un modèle et une migration<br>
<em><strong>php artisan make:model Post -m</strong></em><br>
Dans C:\laragon\www\laravelexperience\database\migrations\2023_02_28_220252_create_posts_table.php : <br>
    <strong><em>public function up()<br>
    {<br>
        Schema::create('recipes', function (Blueprint $table) {<br>
            $table->id();<br>
            $table->string('title');<br>
            $table->mediumText('content');<br>
            $table->timestamps();<br>
        });<br>
    }<br>
</em></strong><br>
Dans App\Models\Recipe.php
    <pre>
      <em>
    <strong>
    use HasFactory;
    protected $fillable = ['title','content'];
      </strong>
    </em>
    </pre>
    On tape ensuite la commande suivante sur le terminal : <strong><em>php artisan migrate</em></strong>
</p>
  
  <p>
<strong><u>Etape2</u></strong>: créer une factorie<br>
<em><strong>php artisan make:factory PostFactory --model=Post</strong></em><br>
Dans C:\laragon\www\laravelexperience\database\factories\PostFactory.php : <br>
    <pre>
      <strong>

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;
use Illuminate\Support\str;

class PostFactory extends Factory
{
    protected $model = Post::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraph,
            'created_at' => now()

        ];
    }
}

      </strong>
    </pre>
    <br>
    On tape ensuite la commande suivante sur le terminal : <strong><em>composer dump-autoload</em></strong>
    et <strong><em>php artisan tinker</em></strong><br>
    >>><strong><em>Post::factory()->count(10)->create()</em></strong><br>
    Sous Heidi SQL, dans la table posts, on a 10 fausses informations créees.
</p>

  
    </body>
</html>
