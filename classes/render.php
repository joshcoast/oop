<?php

class Render
{
  public static function listIngredients($ingredients) 
  {
    $output = "";
    foreach ($ingredients as $ing) {
      $output .= $ing["amount"] . " " . $ing["measure"] . " " . $ing["item"];
      $output .= "\n";
    }
    return $output;
  }
  // static methods are accessable ouside the class, without needing to make an instance of the class.
  public static function displayRecipe($recipe)
  {
    $output = "";
    $output .= $recipe->getTitle() . " by " . $recipe->getSource();
    $output .= "\n";
    $output .+ implode(", ",$recipe->getTags());
    $output .= "\n";
    $output .= self::listIngredients($recipe->getIngredients());
    $output .= implode("\n", $recipe->getInstructions());
    $output .= "\n";
    $output .= $recipe->getYield();
    return $output;
  }
}