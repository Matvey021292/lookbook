<?php

namespace App;

use Config;
use App\Filepath;
use File;

class Download
{
    private $book;
    private $format;
    protected $dir_upload;
    protected $file;
    private $url;
    private $request;
    protected $generate_path;
    protected $generate_name;
    protected $name;

    public function __construct(Book $book, $format)
    {
        $this->dir_upload = Config::get('settings.dir_file_upload');
        $this->url = Config::get('settings.replace_url');
        $this->format = $format;
        $this->book = $book;
        $this->file = $this->get_path();
        $this->generate_path = $this->generate_path();
        $this->generate_name = $this->generate_name();
        $this->name = $this->get_file_name();

    }

    protected function generate_file_url(){
        return  public_path($this->dir_upload . "{$this->book->id}/{$this->format}/{$this->name}");
    }

    protected function get_path()
    {
        if ($this->book->path) {
            foreach ($this->book->path as $path)
            return $path->Path;
        }
        return false;
    }

    protected function get_file()
    {
        if (file_exists(public_path($this->dir_upload . $this->file))) {
           return public_path($this->dir_upload . $this->file);
        }
        return false;
    }

    private function generate_url(){
        return "{$this->url}/b/{$this->book->id}/{$this->format}";
    }

    protected function generate_path(){
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

    protected function generate_name(){
        if($name = $this->check_url()) return str_replace('"','',$name);
    }

    private function save_filepath(){
        $filepath = new Filepath;
        $filepath->Path = "{$this->book->id}/{$this->format}/" . $this->generate_name;
        $filepath->book_ID = $this->book->id;
        $filepath->Format = $this->format;
        $filepath->save();
    }

    protected function get_file_name(){
        if($this->book->filename){
            return  $this->book->filename->FileName;
        }
    }

    private function save_filename(){
        if(!$this->name ){
            $filename = new Filename;
            $filename->book_ID =  $this->book->id;
            $filename->FileName = $this->generate_name;
            $filename->save();
        }
    }

    public function download()
    {
        $message = '';
        if ($this->file && $this->get_file()) {
            $message = array('status' => 'error', 'message' => 'Файл уже существует');
        } else {
            $this->create_dir();
            file_put_contents( $this->generate_path .$this->generate_name , fopen($this->request, 'r'));
            $this->save_filepath();
            $this->save_filename();
        }
        return $message;
    }

}
