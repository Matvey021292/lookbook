<?php

namespace App\Repositories;

// use App\Menu;
use Menu;

class MenusRepository extends Repository{
	
	public function __construct(\App\Menu $menu){
		$this->model = $menu;
	}
	
	public function getMenu()
    {
        $menu = $this->get();
        $mBuilder = Menu::make('general_menu', function ($m) use ($menu) {
            foreach ($menu as $item) {
                if ($item->parent == 0) {
                    $m->add($item->title,  $item->path)->id($item->id);
                } else {
                    if ($m->find($item->parent)) {
                        $m->find($item->parent)->add( $item->title,  $item->path)->id($item->id);
                    }
                }
            }
        });
        return $mBuilder;
    }

}

?>