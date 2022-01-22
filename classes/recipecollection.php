<?php

new RecipeCollection()
{
	private $title;
	private $recipes = array();

public function set_title( $title ) {
	$this->title = ucwords( $title );
}

public function get_title() {
	return $this->title;
}

}
