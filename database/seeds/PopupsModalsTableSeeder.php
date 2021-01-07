<?php

use Illuminate\Database\Seeder;
use App\Models\ArticleType;

class PopupsModalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $artType = ArticleType::create([
            'type' => 'Модалки',
            'alias' => 'popups',
        ]);
        $artType->articles()->create([
            'key' => 'leave_site',
            'title' => 'Уходите со страницы?',
            'content' => '<p>Возможно Вас заинтересует наш раздел с <a href="http://127.0.0.1:8000/offers">акциями</a></p>',
            'is_active' => True,
        ]);
    }
}
