<?php
/**
 * Created by PhpStorm.
 * User: KDF5000
 * Date: 2015/9/15
 * Time: 22:10
 */
/**
 * 获取指定目录下的所有文件，返回一个数组，数组元素为文件的实际路径
 * @param $dir
 * @return array
 */
function getAllFiles($dir,$extension='php'){
    $files = array();
    if(is_file($dir)){
        if(pathinfo($dir,PATHINFO_EXTENSION) == $extension){
            array_push($files,$dir);
        }
        return $files;
    }
    $folder = new DirectoryIterator($dir);
    foreach($folder as $file){
        if($file->isFile()){
            if(pathinfo($file,PATHINFO_EXTENSION) == $extension){
                array_push($files,$file->getRealPath());
            }
            continue ;
        }
        if(!$file->isDot()){
            $sub_files = getAllFiles($file->getRealPath(),$extension);
            $files = array_merge($files,$sub_files);
        }
    }
    return $files;
}

$files = getAllFiles("../src/ThinkPHP");
$f = fopen("res.txt",'wa+');
foreach ($files as $file ) {
    $pos = strpos($file, '.class.php');
    if($pos != null){
        $new_name = str_replace(".class.php",".php",$file);
        rename($file, $new_name);
        fwrite($f, $new_name."\n");
    }
}
fclose($f);


