<?php
/**
 * The Recipe class. Defines what information can be added and used for a recipe.
 *
 * @category   Recipe
 * @package    Recipe Book
 * @author     Josh Coast <josh@joshcoast.com>
 * @copyright  1997-2005 The PHP Group
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    SVN: $Id$
 * @link       http://joshcoast.com
 * @since      File available since Release 1.0
 */

/**
 * Recipe class defines what goes into a recipe.
 */
class Recipe {

	/**
	 * The title of the recipe.
	 *
	 * @var string $title
	 */
	private $title;

	/**
	 * The ingredients for the recipe.
	 *
	 * @var array $ingredients
	 */
	private $ingredients = array();

	/**
	 * The instructions for the recipe.
	 *
	 * @var array $instructions
	 */
	private $instructions = array();

	/**
	 * The yield for the recipe. How may servings this recipe makes.
	 *
	 * @var array $yield
	 */
	private $yield;

	/**
	 * The tags for the recipe. Used for sorting.
	 *
	 * @var array $tags
	 */
	private $tag = array();

	/**
	 * The source for the recipe. The person or book responsible for the recipe.
	 * Uses the default of "Josh Coast".
	 *
	 * @var array $source
	 */
	private $source = 'Josh Coast';

	/**
	 * The kinds of measurements excepted for the recipe.
	 * This is a preloaded array.
	 *
	 * @var array $measurements
	 */
	private $measurements = array(
		'tsp',
		'tbsl',
		'cup',
		'oz',
		'ol',
		'fl oz',
		'pint',
		'quart',
		'gallon',
	);

	/**
	 * Set the title of the recipe and make title case.
	 *
	 * @param Title $title string The title of the recipe.
	 */
	public function set_title( $title ) {
		$this->title = ucwords( $title );
	}

	/**
	 * Returns the title of the recipe.
	 *
	 * @return Title
	 */
	public function get_title() {
		return $this->title;
	}

	/**
	 * Add an ingredient. Check if amount is a float.
	 * Checks if measurement is an entry in $measurements.
	 * Converts Items to title case. Converts measurement to lowercase.
	 *
	 * @param Item    $item The instruction.
	 * @param Amount  $amount The instruction.
	 * @param Measure $measure The instruction.
	 *
	 * @throws Not_Float If amount isn't a float message.
	 * @throws Not_Valid_Measurement If measurement isn't from defined list message.
	 */
	public function add_ingredient( $item, $amount = null, $measure = null ) {
		if ( $amount !== null && ! is_float( $amount ) && ! is_int( $amount ) ) {
			exit( 'The amount must be a float: The ' . get_type( $amount ) . " '$amount' was given. " );
		}
		if ( $measure !== null && ! in_array( strtolower( $measure ), $this->measurements ) ) {
			exit( 'Please enter a valid measurement: ' . implode( ', ', $this->measurements ) . '. ' );
		}
		$this->ingredients[] = array(
			'item'    => ucwords( $item ),
			'amount'  => $amount,
			'measure' => strtolower( $measure ),
		);
	}

	/**
	 * Get and return the ingredients
	 *
	 * @return Ingredients
	 */
	public function get_ingredients() {
		return $this->ingredients;
	}

	/**
	 * Add an instruction
	 *
	 * @param String $string The instruction.
	 */
	public function add_instructions( $string ) {
		$this->instructions[] = $string;
	}

	/**
	 * Add an instruction
	 *
	 * @return Instructions
	 */
	public function get_instructions() {
		return $this->instructions;
	}

	/**
	 * Add a tag and convert to lower case
	 *
	 * @param Tag $tag The tag.
	 */
	public function add_tag( $tag ) {
		$this->tags[] = strtolower( $tag );
	}

	/**
	 * Get Tags
	 *
	 * @return Tags
	 */
	public function get_tags() {
		return $this->tags;
	}

	/**
	 * Set a yield, how much the recipe makes.
	 *
	 * @param Yield $yield The yield.
	 */
	public function set_yield( $yield ) {
		$this->yield = $yield;
	}

	/**
	 * Return the yield, how much the recipe makes.
	 *
	 * @return Yield sting
	 */
	public function get_yield() {
		return $this->yield;
	}

	/**
	 * Set a source, who created this recipe.
	 *
	 * @param Source $source The source.
	 */
	public function set_source( $source ) {
		$this->source = ucwords( $source );
	}

	/**
	 * Return the source, who created this recipe.
	 *
	 * @return Source sting
	 */
	public function get_source() {
		return $this->source;
	}

}

