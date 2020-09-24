<?php

use Illuminate\Database\Seeder;
use Illuminate\Filesystem\Filesystem;

class ObjectProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \App\Models\ObjectModel::create([
            'product_type_id' => '1',
            'product_subtype_id' => '1',
            'stella' => 'stella o-58 80x40x5.obj',
            'tombstones' => 'tombstones 80x40x3.obj',
            'pedestals' => 'pedestals 40x15x12.obj',
            'parterres' => 'parterrest 80x40x8x5.obj',
            'stella_mtl' => 't-o-5.mtl',
            'tombstones_mtl' => 't-plate80х40х3.mtl',
            'pedestals_mtl' => 't-pedesta98/l40x15x12.mtl',
            'parterres_mtl' => 't-m-flower80x40x8x5.mtl',
        ]);
        \App\Models\ObjectModel::create([
            'product_type_id' => '1',
            'product_subtype_id' => '2',
            'stella' => 'stella o-58 80x40x5.obj',
            'tombstones' => 'tombstones 80x40x3.obj',
            'pedestals' => 'pedestals 40x15x12.obj',
            'parterres' => 'parterrest 80x40x8x5.obj',
            'stella_mtl' => 't-o-5.mtl',
            'tombstones_mtl' => 't-plate80х40х3.mtl',
            'pedestals_mtl' => 't-pedesta98/l40x15x12.mtl',
            'parterres_mtl' => 't-m-flower80x40x8x5.mtl',
        ]);
        \App\Models\ObjectModel::create([
            'product_type_id' => '1',
            'product_subtype_id' => '3',
            'stella' => 'stella o-58 80x40x5.obj',
            'tombstones' => 'tombstones 80x40x3.obj',
            'pedestals' => 'pedestals 40x15x12.obj',
            'parterres' => 'parterrest 80x40x8x5.obj',
            'stella_mtl' => 't-o-5.mtl',
            'tombstones_mtl' => 't-plate80х40х3.mtl',
            'pedestals_mtl' => 't-pedesta98/l40x15x12.mtl',
            'parterres_mtl' => 't-m-flower80x40x8x5.mtl',
        ]);
        \App\Models\ObjectModel::create([
            'product_type_id' => '2',
            'product_subtype_id' => '4',
            'stella' => 'д-3 90x60x5.obj',
            'tombstones' => 'плита 100х50х3 горизонталь.obj',
            'pedestals' => 'тумба 60х12х15.obj',
            'parterres' => 'цветник 100х50х3 горизонтальный.obj',
            'parterres_vertical_right' => 'цветник 100х50х8х5 слева вертикаль.obj',
            'parterres_vertical_left' => 'цветник 100х50х8х5 справа вертикаль.obj',
            'tombstones_vertical_right' => '100х50х3 справа вертикаль плита.obj',
            'tombstones_vertical_left' => '100х50х3 слева вертикаль плита.obj',
//            'stella_mtl' => 't-o-5.mtl',
//            'tombstones_mtl' => 't-plate80х40х3.mtl',
//            'pedestals_mtl' => 't-pedesta98/l40x15x12.mtl',
//            'parterres_mtl' => 't-m-flower80x40x8x5.mtl',
//            'tombstones_vertical_right_mtl' => 't-o-5.mtl',
//            'tombstones_vertical_left_mtl' => 't-plate80х40х3.mtl',
//            'parterres_vertical_right_mtl' => 't-pedesta98/l40x15x12.mtl',
//            'parterres_vertical_left_mtl' => 't-m-flower80x40x8x5.mtl',
        ]);
        \App\Models\ObjectModel::create([
            'product_type_id' => '2',
            'product_subtype_id' => '5',
            'stella' => 'д-3 90x60x5.obj',
            'tombstones' => 'плита 100х50х3 горизонталь.obj',
            'pedestals' => 'тумба 60х12х15.obj',
            'parterres' => 'цветник 100х50х3 горизонтальный.obj',
            'parterres_vertical_right' => 'цветник 100х50х8х5 слева вертикаль.obj',
            'parterres_vertical_left' => 'цветник 100х50х8х5 справа вертикаль.obj',
            'tombstones_vertical_right' => '100х50х3 справа вертикаль плита.obj',
            'tombstones_vertical_left' => '100х50х3 слева вертикаль плита.obj',
//            'stella_mtl' => 't-o-5.mtl',
//            'tombstones_mtl' => 't-plate80х40х3.mtl',
//            'pedestals_mtl' => 't-pedesta98/l40x15x12.mtl',
//            'parterres_mtl' => 't-m-flower80x40x8x5.mtl',
//            'tombstones_vertical_right_mtl' => 't-o-5.mtl',
//            'tombstones_vertical_left_mtl' => 't-plate80х40х3.mtl',
//            'parterres_vertical_right_mtl' => 't-pedesta98/l40x15x12.mtl',
//            'parterres_vertical_left_mtl' => 't-m-flower80x40x8x5.mtl',
        ]);
        \App\Models\ObjectModel::create([
            'product_type_id' => '2',
            'product_subtype_id' => '6',
            'stella' => 'д-3 90x60x5.obj',
            'tombstones' => 'плита 100х50х3 горизонталь.obj',
            'pedestals' => 'тумба 60х12х15.obj',
            'parterres' => 'цветник 100х50х3 горизонтальный.obj',
            'parterres_vertical_right' => 'цветник 100х50х8х5 слева вертикаль.obj',
            'parterres_vertical_left' => 'цветник 100х50х8х5 справа вертикаль.obj',
            'tombstones_vertical_right' => '100х50х3 справа вертикаль плита.obj',
            'tombstones_vertical_left' => '100х50х3 слева вертикаль плита.obj',
//            'stella_mtl' => 't-o-5.mtl',
//            'tombstones_mtl' => 't-plate80х40х3.mtl',
//            'pedestals_mtl' => 't-pedesta98/l40x15x12.mtl',
//            'parterres_mtl' => 't-m-flower80x40x8x5.mtl',
//            'tombstones_vertical_right_mtl' => 't-o-5.mtl',
//            'tombstones_vertical_left_mtl' => 't-plate80х40х3.mtl',
//            'parterres_vertical_right_mtl' => 't-pedesta98/l40x15x12.mtl',
//            'parterres_vertical_left_mtl' => 't-m-flower80x40x8x5.mtl',
        ]);


        $filesystem = new Filesystem();

        $from = base_path('public/assets/model-3d');

        $images = $filesystem->allFiles($from);

        foreach ($images as $key => $image) {
            $path = 'public/Product_3d_models/' . $image->getFilename();

            $this->moveImage($image, $path, $filesystem);

        }

    }

    /**
     * Move image file to storage.
     *
     * @param \Symfony\Component\Finder\SplFileInfo $image File info.
     * @param string $path Path to move to.
     * @param /Illuminate\Filesystem\Filesystem     $filesystem
     */
    protected function moveImage($image, $path, $filesystem)
    {
        $imageFile = $filesystem->get($image->getPathname());

        Storage::put($path, $imageFile);

        $fullPath = storage_path('app/' . $path);

//        chgrp($fullPath, 'gas');
    }

}

