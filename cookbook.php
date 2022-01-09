<?php
include "classes/recipes.php";
include "classes/render.php";

$recipe1 = new Recipe();
//$recipe1->source = "Nana";
$recipe1->setTitle("apple Pie");
$recipe1->addIngredient("egg", 1);
$recipe1->addIngredient("flower", 2, "cup");

$recipe2 = new Recipe();
$recipe2->setSource = "Betty Crocker";
$recipe2->setTitle("Blueberry Pie");

$recipe1->addInstructions("This is the first instruction");
$recipe1->addInstructions("This is the second instruction");
  
$recipe1->addTag("Breakfast");
$recipe1->addTag("Eggs");

$recipe1->setYield("makes one serving");
$recipe1->setSource("Yo Mama");

echo Render::displayRecipe($recipe1);