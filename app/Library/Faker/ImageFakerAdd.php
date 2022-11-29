<?php

namespace App\Library\Faker;

use Illuminate\Support\Facades\Storage;

class ImageFakerAdd
{

    private static $pathInput;
    private static $pathOutput;
    private static $urlOutput;
    private static $formatDir =
        [
          'w'  => '/w',
          'h'  => '/h',
          'sq' => '/sq',
        ];

    public function addImageFile($type = 'default', $format = 'sq')
    {
        self::setPath($type, $format);

        return self::getFileList($type);
    }

    private static function setPath($type, $format)
    {
        $dirImg = self::$formatDir[$format] ?? die('Error parameter 2: ' . $format . "\r\n");

        self::$pathInput = "/home/sergey/Изображения/imageWork/{$type}{$dirImg}/";

        self::$urlOutput = "fakerImg/{$type}/";

        self::$pathOutput = Storage::path(self::$urlOutput);

    }

    private static function getFileList()
    {

        if (is_dir(self::$pathInput)) {

            $files = self::getFiles();

            $file = self::randomFiles($files);

            return self::copyfile($file);

        } else {

            die('Error! No directory: ' . self::$pathInput);
        }

    }

    private static function copyfile($oldFile)
    {

        $ext      = pathinfo($oldFile, PATHINFO_EXTENSION);
        $fileName = uniqid() . '.' . $ext;

        $fileUrl    = self::$urlOutput . $fileName;
        $fileOutput = self::$pathOutput . $fileName;

        self::mk_dir(self::$pathOutput);

        copy($oldFile, $fileOutput);

        return $fileUrl;
    }

    private static function getFiles()
    {
        $files = scandir(self::$pathInput);

        unset($files[0], $files[1]);

        sort($files);

        return $files;
    }

    private static function mk_dir($dir_path)
    {

        if ( ! is_dir(dirname($dir_path))) {

            self::mk_dir(dirname($dir_path));

        }

        is_dir($dir_path) ?: mkdir($dir_path, 0777);

    }

    private static function randomFiles($array)
    {
        $key = array_rand($array, 1);

        $file = self::$pathInput . $array[$key];

        return $file;
    }

}
