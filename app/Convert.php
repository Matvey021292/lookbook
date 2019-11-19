<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Convert extends Model
{
    public function explode_file($name, $format_convert){
        $formats = [
            '.fb2.zip','.epub', '.mobi', '.html'
        ];
        
        foreach($formats as $key => $format):
            if(strpos($name, $format)):
                $name = str_replace($format, '.' . $format_convert, $name);
            endif;
        endforeach;
        return $name;
    }
    
    public function convert_format($path, $format){
        $file = $this->explode_file($path, $format);
        if(file_exists("{$file}")):
            return $file;
        endif;
        $cmd = "ebook-convert {$path} {$file}";
        exec(escapeshellcmd($cmd), $output, $return_var);
        return $file;
    }
}
