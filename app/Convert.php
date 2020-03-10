<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Convert extends Download
{

    private $book = '';
    private $format = '';
    private $original_file_path;
    private $convert_file_path;

    public function __construct(Book $book, $format){
        parent::__construct($book, $format);
        $this->book = $book;
        $this->format = $format;
        $this->original_file_path = $this->get_file();
        $this->convert_file_path = $this->generate_path . $this->get_file_name();
    }

    public function convert(){
        dd($this->generate_file_url());
//        $cmd = "ebook-convert {$this->original_file_path} {$this->convert_file_path}";
//        exec(escapeshellcmd($cmd), $output, $return_var);
    }

//    private function convert_format(){
//        $file = $this->explode_file($this->path, $this->format);
//        if(file_exists("{$file}")):
//            return $file;
//        endif;
//        $cmd = "ebook-convert {$this->path} {$file}";
//        exec(escapeshellcmd($cmd), $output, $return_var);
//        return $file;
//    }

//    public function convert($file_path, $format){
//        $files_upload = Config::get('settings.files_upload');
//        $file = str_replace('fb2.zip', $format, $file_path);
//        if(!file_exists(public_path("{$files_upload}{$file_path}")) || file_exists(public_path("{$files_upload}{$file}"))) return $file;
//
//        $cmd = "ebook-convert " . public_path("{$files_upload}{$file_path}") . " ". public_path("{$files_upload}{$file}");
//        exec(escapeshellcmd($cmd), $output, $return_var);
//        return $file;
//    }

}
