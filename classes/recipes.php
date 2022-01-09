<?php

class Recipe 
{
  private $title;
  private $ingredients = array();
  private $instructions = array();
  private $yield;
  private $tag = array();
  private $source = "Josh Coast";
  
  private $measurements = array(
    "tsp",
    "tbsl",
    "cup",
    "oz",
    "ol",
    "fl oz",
    "pint",
    "quart",
    "gallon"
  );
  
  public function setTitle($title)
  {
     $this->title = ucwords($title);
  }
  
  public function getTitle()
  {
     return $this->title;
  }
  
  public function addIngredient($item, $amount = null, $measure = null)
  {
    if ($amount != null && !is_float($amount) && !is_int($amount)) {
      exit("The amount must be a float: The " . gettype($amount) . " '$amount' was given. ");
    }
    if ($measure != null && !in_array(strtolower($measure), $this->measurements)) {
      exit("Please enter a valid measurement: " . implode(", ", $this->measurements) . ". ");
    }
    $this->ingredients[] = array(
      "item" => ucwords($item),
      "amount" => $amount,
      "measure" => strtolower($measure)
    );
  }
  
  public function getIngredients()
  {
    return $this->ingredients;
  }
  
  public function addInstructions($string)
  {
    $this->instructions[] = $string;
  }
  
  public function getInstructions()
  {
    return $this->instructions;
  }
  
  public function addTag($tag){
    $this->tags[] = strtolower($tag);
  }
  
  public function getTags() 
  {
    return $this->tags; 
  }
  
  public function setYield($yield) {
    $this->yield = $yield; 
  }
  
  public function getYield() {
    return $this->yield;
  } 
  
  public function setSource($source) {
    $this->source = ucwords($source); 
  }
  
  public function getSource() {
    return $this->source; 
  }
  
}

