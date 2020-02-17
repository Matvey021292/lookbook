<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Convert extends Model
{

    public $path = '';
    public $format = '';

    public function __construct($path, $format = ''){
        $this->path = $path;
        $this->format = $format;
        $this->convert_format();
    }

    public function convert_format(){
        $file = $this->explode_file($this->path, $this->format);
        if(file_exists("{$file}")):
            return $file;
        endif;
        $cmd = "ebook-convert {$this->path} {$file}";
        exec(escapeshellcmd($cmd), $output, $return_var);
        return $file;
    }
}
