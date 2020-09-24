<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ArticlesTableSeeder::class,
            ModifierTypesSeeder::class,
            SiteContactTableSeeder::class,
            NewsTableSeeder::class,
            ProductTypesTableSeeder::class,
            ProductMaterialsTableSeeder::class,
            ProductsTableSeeder::class,
            InfoAboutProductsTableSeeder::class,
            StellasTableSeeder::class,
            PedestalsTableSeeder::class,
            TombstonesTableSeeder::class,
            ParterresTableSeeder::class,
            UserTableSeeder::class,
            CoefficientModifierStellaSeeder::class,
            CurrencyRatesTableSeeder::class,
            CoefficientModifierParterresSeeder::class,
            CoefficientModifierPedestalsSeeder::class,
            CoefficientModifierTombstonesSeeder::class,
            CoefficientModifierStellaSeeder::class,
            ModifierCuttingTableSeeder::class,
            EmployeeTableSeeder::class,
            BeautificationTableSeeder::class,
            DeliveryTableSeeder::class,
            HomeProductsTableSeeder::class,
            HomeArticleTableSeeder::class,
            SpecialOfferTableSeeder::class,
            EngravingPortraitTableSeeder::class,
            TypeImageTableSeeder::class,
            TombstoneColorsTableSeeder::class,
            StellaImageTableSeeder::class,
            TombstoneImageTableSeeder::class,
            MedallionTableSeeder::class,
            ObjectProductSeeder::class,
            BannerTableSeeder::class,
            SiteServicesTableSeeder::class,
        ]);
    }
}
