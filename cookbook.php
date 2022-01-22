<?php
require 'classes/recipes.php';
require 'classes/render.php';

$recipe2 = new Recipe();
$recipe1 = new Recipe();

$recipe1->set_title( 'apple Pie' );
$recipe1->add_ingredient( 'egg', 1 );
$recipe1->add_ingredient( 'flower', 2, 'cup' );
$recipe1->add_instructions( '1) This is my first instruction' );
$recipe1->add_instructions( '2) This is my second instruction' );
$recipe1->add_tag( 'Breakfast' );
$recipe1->add_tag( 'Eggs' );
$recipe1->set_yield( 'makes one serving' );
$recipe1->set_source( 'Yo Mama Cook Book' );

$recipe2->set_title( 'Blueberry Pie' );
$recipe2->set_source( 'Betty Crocker' );
$recipe2->add_ingredient( 'Flower', 2, 'cup' );
$recipe2->add_ingredient( 'egg', 1 );
$recipe2->add_ingredient( 'flower', 2, 'cup' );

echo implode( ' --- ', $recipe1->get_instructions() );

echo Render::display_recipe( $recipe1 );
