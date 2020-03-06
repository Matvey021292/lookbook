<?php

namespace App;

use Config;
use App\Filepath;
use File;

class Download
{
    private $book;
    private $format;
    private $dir_upload;
    private $file;
    private $url;
    private $request;

    public function __construct(Book $book, $format)
    {
        $this->dir_upload = Config::get('settings.dir_file_upload');
        $this->url = Config::get('settings.replace_url');
        $this->format = $format;
        $this->book = $book;

    }

    private function get_path()
    {
        if ($this->book->path) {
            return $this->book->path->Path;
        }
        return false;
    }

    private function get_file()
    {
        if (file_exists(public_path($this->dir_upload . $this->file))) {
            return true;
        }
        return false;
    }

    private function generate_url(){
        return "{$this->url}/b/{$this->book->id}/{$this->format}";
    }

    private function generate_path(){
        return  public_path($this->dir_upload . "{$this->book->id}/{$this->format}/");
    }

    private function create_dir(){
        $dir = $this->generate_path();
        if(!is_dir($dir)){
            File::makeDirectory($dir, 0775, true);
        }
        return $dir;
    }

    private function check_url(){
        $this->request = $this->generate_url();
        $attachment = get_headers($this->request, 1);
        if( $attachment && isset($attachment['Content-Disposition'])){
            preg_match('/\s*=\s*([\S\s]+)/i  ', $attachment['Content-Disposition'], $match);
            if(isset($match[1])){
                return $match[1];
            }
        }
        return false;
    }

    public function generate_name(){
        if($name = $this->check_url()) return $name;
    }

    public function download()
    {
        $message = '';

        if ($this->file = $this->get_path() && $this->get_file()) {
            $message = array('status' => 'error', 'message' => 'Файл уже существует');
        } else {
            file_put_contents($this->generate_path() . $this->generate_name(), fopen($this->request, 'r'));
        }
        return $message;
    }

}
