<?php

use Illuminate\Database\Seeder;

class BannerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $banner = [
            'key' => 'monument',
            'mobile_img' => '',
            'desktop_img' => '',
        ];
        \App\Models\Banner::create($banner);
    }
}
