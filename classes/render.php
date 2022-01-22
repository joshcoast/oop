<?php

class Render {

	public static function list_ingredients( $ingredients ) {
		$output = '';
		foreach ( $ingredients as $ing ) {
			$output .= '<li>';
			$output .= $ing['amount'] . ' ' . $ing['measure'] . ' ' . $ing['item'];
			$output .= '</li>';
		}
		return $output;
	}
	// Static methods can be called directly - without creating an instance of the class first.
	public static function display_recipe( $recipe ) {
		$output  = ' ';
		$output .= $recipe->get_title() . ' by ' . $recipe->get_source();
		$output .= "\n";
		$output .= implode( ', ', $recipe->get_tags() );
		$output .= "\n";
		$output .= self::listIngredients( $recipe->get_ingredients() );
		$output .= implode( "\n", $recipe->get_instructions() );
		$output .= "\n";
		$output .= $recipe->get_yield();
		return $output;
	}
}
