<?php
/**
 * The Render class. Defines what information can be rendered when displaying a recipe.
 *
 * @category   Render
 * @package    Recipe Book
 * @author     Josh Coast <josh@joshcoast.com>
 * @copyright  1997-2005 The PHP Group
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    SVN: $Id$
 * @link       http://joshcoast.com
 * @since      File available since Release 1.0
 */

/**
 * Render class defines how recipes are rendered.
 */
class Render {

	/**
	 * List the ingredients.
	 *
	 * @param Array $ingredients list the ingredients in a recipe.
	 */
	public static function list_ingredients( $ingredients ) {
		$output = '';
		foreach ( $ingredients as $ing ) {
			$output .= '<li>';
			$output .= $ing['amount'] . ' ' . $ing['measure'] . ' ' . $ing['item'];
			$output .= '</li>';
		}
		return $output;
	}

	/**
	 * Return the recipe.
	 * Static methods can be called directly - without creating an instance of the class first.
	 *
	 * @param Array $recipe list the recipe.
	 */
	public static function display_recipe( $recipe ) {
		$output  = ' ';
		$output .= $recipe->get_title() . ' by ' . $recipe->get_source();
		$output .= "\n";
		$output .= implode( ', ', $recipe->get_tags() );
		$output .= "\n";
		$output .= self::list_ingredients( $recipe->get_ingredients() );
		$output .= implode( "\n", $recipe->get_instructions() );
		$output .= "\n";
		$output .= $recipe->get_yield();
		return $output;
	}
}
