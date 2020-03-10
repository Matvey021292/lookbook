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
        $this->edit_format = 'fb2.zip';
        $this->convert_file_path = $this->generate_path . $this->get_file_name();

    }

    public function convert(){
        $this->create_dir();
        $cmd = "ebook-convert {$this->original_file_path} {$this->convert_file_path}";
        exec(escapeshellcmd($cmd), $output, $return_var);
        return $message = array('status' => 'error', 'message' => $this->generate_file_url());
    }

}
