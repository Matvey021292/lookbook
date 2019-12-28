<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Routing\ResponseFactory;
use Zip;


class BookContent extends Model
{

    
    public function convert_format($path){
        $file = substr($path, 0 , strpos($path, '.'));
        if(is_dir("{$file}")) return $file; 
        $cmd = "ebook-convert {$path} {$file}";
        exec(escapeshellcmd($cmd), $output, $return_var);
        $this->check_convert($output);
        return $file;
    }
    
    public function check_convert($output){
        array_pop($output);
        if(empty($output)):
            echo "Конвертирование не удалось \n";
        else:
            echo "Файл удачно сохранен \n";
        endif;
    }
    
    public function get_data_from_resource($path){
        $file = $this->convert_format($path);
        $opf = 'content.opf';
        $package = simplexml_load_file($file . '/' . $opf);
        $data = [
            'title' => '', 
            'creator' => '', 
            'creator' => '', 
            'language' => '', 
            'date' => '', 
            'description' => '', 
            'publisher' => ''
        ];
        foreach($data as $key => $value){
            $data[$key] = (string) $package->metadata->children('dc', true)->$key;
        }
        return $data;
    }

    public function unzip_file($path){
        $file = substr($path, 0 , strpos($path, '.'));
        if(is_dir($file)) return $file;
        $zip = Zip::open($path);
        $zip->extract($file);
        return $file;
    }
    
    public function get_file_content($path){
        
        $file = $this->convert_format(public_path() . $path);
        $page = $file . '/index.xhtml';
        if(!file_exists($page)) return;
        // $this->cp_resource($file);
        $content = file_get_contents($page);
        $path =  substr($path, 0 , strpos($path, '.'));
        $content = str_replace('src="', 'src="' . $path . '/', $content);
        $content = str_replace('<link href="', '<link href="' . $path . '/', $content);
        return response()->json([
            'path' =>  $path,
            'content' => $content
            ]);
        }
        
        public function cp_resource($path){
            $files = array_diff(scandir($path), ['.','..']);
            foreach ($files as $key => $file) {
                if(exif_imagetype($path . '/' . $file)){
                    echo $path .'/'. $file;
                break;
            }
        }
        
    }
    
    
    // get_data_from_resource($path);
    // get_file_content($path);
}
