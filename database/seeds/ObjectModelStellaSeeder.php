<?php

use Illuminate\Database\Seeder;
use Illuminate\Filesystem\Filesystem;

class ObjectModelStellaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\ObjectModelStella::create([
            'product_id' => '1',
            'stella' => 'stella o-58 80x40x5.obj',
            'stella_mtl' => 't-o-5.mtl',
        ]);


        $filesystem = new Filesystem();

        $from = base_path('public/assets/model-3d');

        $images = $filesystem->allFiles($from);

        foreach ($images as $key => $image) {
            $path = 'public/Product_3d_models_stella/' . $image->getFilename();

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

    }
}

