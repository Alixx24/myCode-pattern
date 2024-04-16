<?php
namespace App\Http\Services\Image;

use Intervention\Image\Image;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Config;
use Intervention\Image\Drivers\Gd\Driver;

class ImageService extends ImageToolsService{
    public function save($image){
        //set image
        $this->setImage($image);
        //execute provider
        $this->provider();
        //save image
        $manager = new ImageManager(new Driver());
        $result = $manager->read($image->getRealPath())->save(public_path($this->getImageAddress()));
        // $result = Image::read($image->getRealPath())->save(public_path($this->getImageAddress()), $this->getImageFormat());
        return $result ? $this->getImageAddress() : false;

    }
    public function fitAndSave($image, $width, $height){
        $this->setImage($image);
        //execute provider
        $this->provider();
        //save image
        $picture = $image->read($image->getRealPath())->resize($width, $height);
        // $result = $picture->save(public_path($this->getImageAddress()), $this->getImageFormat());
        $result = $picture->save(public_path($this->getImageAddress()));

        return $result ? $this->getImageAddress() : false;
    }

    public function createIndexAndSave($image){
        //get data from config
        $imageSizes = Config::get('image.index-image-sizes');
        //set image
        $this->setImage($image);
        //set directory
        $this->getImageDirectory() ?? $this->setImageDirectory(date('Y') . DIRECTORY_SEPARATOR . date('m') . DIRECTORY_SEPARATOR . date('d'));
        $this->setImageDirectory($this->getImageDirectory() .  DIRECTORY_SEPARATOR . time());
        //set name
        $this->getImageName() ?? $this->setImageName(time());
        $imageName = $this->getimageName();

        $indexArray = [];
        foreach($imageSizes as $sizeAlias => $imageSize){
            //create and set this size name
            $currntImageName = $imageName . '_' . $sizeAlias;
            $this->setImageName($currntImageName);
            //execute provider
            $this->provider();
            //save image
            $manager = new ImageManager(new Driver());
            $result = $manager->read($image->getRealPath())->resize($imageSize['width'], $imageSize['height'])->save(public_path($this->getImageAddress()));

            if($result)
                $indexArray[$sizeAlias] = $this->getImageAddress();
            else{
                return false;
            }

        }
        $images['indexArray'] = $indexArray;
        $images['directory'] = $this->getFinalImageDirectory();
        $images['currentImage'] = Config::get('image.default-current-index-image');
        return $images;
    }
    public function deleteImage($imagePath){
        if(file_exists($imagePath)){
            unlink($imagePath);
        }
    }
    public function deleteIndex($images){
        $directory = public_path($images['directory']);
        $this->deleteDirectoryAndFiles($directory);
    }
    public function deleteDirectoryAndFiles($directory){
        if(!is_dir($directory)){
            return false;
        }
        $files = glob($directory . DIRECTORY_SEPARATOR . '*', GLOB_MARK);
        foreach($files as $file){
            if(is_dir($file)){
                $this->deleteDirectoryAndFiles($file);
            }
            else{
                unlink($file);
            }
        }
        $result = rmdir($directory);
        return $result;
    }
}
