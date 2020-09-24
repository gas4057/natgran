<?php

use Illuminate\Database\Seeder;

class HomeArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $article = \App\Models\HomeArticle::create([
            'alias' => 'home_page',
            'key' => 'first_slider',
            'title' => '',
        ]);

        $article->block()->create([
            'title' => 'Сделайте близкому последний подарок. 1',
            'desc' => 'Получите готовый памятник <span>за 1 месяц от 350 рублей </span>из
                            натурального гранита.',
            'text_block' => '<li>1 - <span> 3D модели прямо на сайте</span></li>
                            <li>2 - <span> узнайте стоимость в зависимости от размера за 1 секунду</span></li>
                            <li>3 - <span> оформите заказ за 2 минуты не выходя из дома</span></li>
                            <li>4 - <span> работаем по всей Беларуси</span></li>',
        ]);
        $article->block()->create([
            'title' => 'Сделайте близкому последний подарок. 1',
            'desc' => 'Получите готовый памятник <span>за 1 месяц от 350 рублей </span>из
                            натурального гранита.',
            'text_block' => '<li>1 - <span> 3D модели прямо на сайте</span></li>
                            <li>2 - <span> узнайте стоимость в зависимости от размера за 1 секунду</span></li>
                            <li>3 - <span> оформите заказ за 2 минуты не выходя из дома</span></li>
                            <li>4 - <span> работаем по всей Беларуси</span></li>',
        ]);
        $article->block()->create([
            'title' => 'Сделайте близкому последний подарок. 1',
            'desc' => 'Получите готовый памятник <span>за 1 месяц от 350 рублей </span>из
                            натурального гранита.',
            'text_block' => '<li>1 - <span> 3D модели прямо на сайте</span></li>
                            <li>2 - <span> узнайте стоимость в зависимости от размера за 1 секунду</span></li>
                            <li>3 - <span> оформите заказ за 2 минуты не выходя из дома</span></li>
                            <li>4 - <span> работаем по всей Беларуси</span></li>',
        ]);
        $article->block()->create([
            'title' => 'Сделайте близкому последний подарок. 1',
            'desc' => 'Получите готовый памятник <span>за 1 месяц от 350 рублей </span>из
                            натурального гранита.',
            'text_block' => '<li>1 - <span> 3D модели прямо на сайте</span></li>
                            <li>2 - <span> узнайте стоимость в зависимости от размера за 1 секунду</span></li>
                            <li>3 - <span> оформите заказ за 2 минуты не выходя из дома</span></li>
                            <li>4 - <span> работаем по всей Беларуси</span></li>',
        ]);

        $article = \App\Models\HomeArticle::create([
            'alias' => 'home_page',
            'key' => 'почему мы',
            'title' => 'Многие думают, что все производители памятников одинаковы и разница только
                    в цене . . .<br><span>Но это не так.</span>',
        ]);

        $article->block()->create([
            'title' => 'Открытые цены <span>без лишних звонков</span>',
            'text_block' => 'цена на памятник устанавливается в зависимости от выбора формы, размера и
                        элементов оформления прямо на сайте.',
        ]);
        $article->block()->create([
            'title' => 'Портреты отчетливо <span>видны даже при влаге </span>',
            'text_block' => 'бесплатно покрываем изображения и текст фасадной снежкой фасадной снежкой
                        фасадной снежкой',
        ]);
        $article->block()->create([
            'title' => 'Отдаем памятник <span>полностью готовый к установке </span>',
            'text_block' => 'если вы решили установить памятник самостоятельно, составляем все ровно по
                        размерам и просверливаем отверстия для',
        ]);
        $article->block()->create([
            'title' => 'Саркофаги и комплексы <span>ровные и без зазоров</span>',
            'text_block' => 'собираем и разбираем несколько раз, пока не доведем до идеала. Многие
                        производители просто заполняют пустоты герметиком.',
        ]);
        $article->block()->create([
            'title' => 'Памятник не деформируется <span>даже через 15 лет </span>',
            'text_block' => 'надежная установка только с бетонным фундаментом всякой химии"всякой
                        химии"всякой химии"',
        ]);
        $article->block()->create([
            'title' => 'Глубокая <span>полировка</span>',
            'text_block' => 'полируем только алмазными дисками "без всякой химии"всякой химии"всякой
                        химии"всякой химии',
        ]);
        $article->block()->create([
            'title' => '100% защита <span>от естественного разрушения </span>',
            'text_block' => 'досконально осматриваем камень на наличие трещин и сколов на каждом этапе
                        производства',
        ]);
        $article->block()->create([
            'title' => 'Безопасность <span>и спокойствие</span></span>',
            'text_block' => 'поэтапный фотоотчет на вайбер или почтупоэтапный фотоотчет на вайбер или
                        почту поэтапный фотоотчет на вайбер или',
        ]);

        $article = \App\Models\HomeArticle::create([
            'alias' => 'home_page',
            'key' => 'СХЕМЫ РАБОТЫ',
            'title' => '',
        ]);
        $article->block()->create([
            'title' => '01',
            'text_block' => 'Выбираете то, что вам нравится из ' . '<a href="' . route('products') . '" rel="noopener noreferrer nofollow">каталога</a></p>',
        ]);
        $article->block()->create([
            'title' => '02',
            'text_block' => 'Добавляете Ваш выбор в ' . '<a href="' . route('cart.show') . '" rel="noopener noreferrer nofollow">корзину</a></p> ' . ' и оформляете заказ.',
        ]);
        $article->block()->create([
            'title' => '03',
            'text_block' => 'Связываемя с вами и обговариваем все нюансы',
        ]);
        $article->block()->create([
            'title' => '4.1',
            'text_block' => 'Вы приходите к нас в офис для заключения договора',
        ]);
        $article->block()->create([
            'title' => '04',
            'text_block' => 'Заключение договора',
        ]);
        $article->block()->create([
            'title' => '4.2',
            'text_block' => 'заключаем договор онлайн <span>(мы высылаем договор вам на почту  и вы устно соглашаетесь с условими)</span>',
        ]);
        $article->block()->create([
            'title' => '5.1',
            'text_block' => 'Оплата на сайте либо через ЕРИП',
        ]);
        $article->block()->create([
            'title' => '05',
            'text_block' => 'Вносите предоплату в размере 30%',
        ]);
        $article->block()->create([
            'title' => '5.2',
            'text_block' => 'Оплата в нашем офисе либо через расчетный счет в банке',
        ]);
        $article->block()->create([
            'title' => '6.1',
            'text_block' => 'Доставляем и устанавливаем',
        ]);
        $article->block()->create([
            'title' => '06',
            'text_block' => 'Доставляем и устанавливаем ваш памятник',
        ]);
        $article->block()->create([
            'title' => '6.2',
            'text_block' => 'Самовывоз или доставка',
        ]);

        $article = \App\Models\HomeArticle::create([
            'alias' => 'home_page',
            'key' => 'Качественный гранит',
            'title' => 'Для производства памятников на нашем производстве',
        ]);
        $article->block()->create([
            'text_block' => 'Изящный внешний вид',
        ]);
        $article->block()->create([
            'text_block' => 'Высокая прочность',
        ]);
        $article->block()->create([
            'text_block' => 'Высокая надежность',
        ]);
        $article->block()->create([
            'text_block' => 'Долговечность',
        ]);
        $article->block()->create([
            'text_block' => 'Не выгоряает на солнце',
        ]);
        $article->block()->create([
            'text_block' => 'Не боиться атмосферных осадков, влаги',
        ]);
        $article->block()->create([
            'text_block' => 'Легко чиститься при помощи воды',
        ]);
        $article->block()->create([
            'text_block' => 'Имеет разные цветовые решения',
        ]);

        $article = \App\Models\HomeArticle::create([
            'alias' => 'home_page',
            'key' => 'site_logo',
        ]);
        $article = \App\Models\HomeArticle::create([
            'alias' => 'home_page',
            'key' => 'site_logo_mobile',
        ]);
    }
}
