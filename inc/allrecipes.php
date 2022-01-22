<?php
/**
 * @package Included Recipes
 *
 * * By Alena Holligan **
 * I use whole wheat pastry flour or whole wheat white flour
 * in all my recipes, but feel free to use whatever you like
 *
 * $lemon_chicken
 * $granola_muffins
 * $belgian_waffles
 * $pepper_casserole
 * $lasagna
 *
 *
 * * By Ken Alger **
 *
 * $dried_mushroom_ragout
 * $rabbit_catalan
 * $grilled_salmon_with_fennel
 * $pistachio_duck
 * $chili_pork
 * $crab_cakes
 * $beef_medallions
 * $silver_dollar_cakes
 * $french_toast
 * $corn_beef_hash
 * $granola
 * $spicy_omelette
 * $scones
 *
 */

$lemon_chicken = new Recipe( 'Italian Lemon Chicken' );
$lemon_chicken->add_ingredient( 'Pasta', 1, 'lb' );
$lemon_chicken->add_ingredient( 'Chicken Breast', 2, 'lb' );
$lemon_chicken->add_ingredient( 'olive oil', .5, 'Cup' );
$lemon_chicken->add_ingredient( 'garlic, chopped', 2, 'tbsp' );
$lemon_chicken->add_ingredient( 'lemon juice', .25, 'Cup' );
$lemon_chicken->add_ingredient( 'sugar', .5, 'tsp' );
$lemon_chicken->add_ingredient( 'parsley', 2, 'tsp' );
$lemon_chicken->add_ingredient( 'oregano', 2, 'tsp' );
$lemon_chicken->add_ingredient( 'basil', 1, 'tbsp' );
$lemon_chicken->add_ingredient( 'parmesian cheese to taste' );
$lemon_chicken->add_instruction( 'Cook pasta according to package directions' );
$lemon_chicken->add_instruction( 'In a large skillet on medium high heat, saute garlic in olive oil for 3 minutes. Cut chicken into bite sized pieces.' );
$lemon_chicken->add_instruction( 'Add additional items to sauce pan and cover for 5 minutes or untill chicken is almost completely white.' );
$lemon_chicken->add_instruction( 'Remove lid and cook until reduced to a thick sauce.' );
$lemon_chicken->add_instruction( 'Serve over pasta with parmesian cheese to taste' );
$lemon_chicken->set_yield( '6 Servings' );
$lemon_chicken->add_tag( 'Main Dish', 'Dinner' );

$granola_muffins = new Recipe( 'Granola Muffins' );
$granola_muffins->add_ingredient( 'egg', 2 );
$granola_muffins->add_ingredient( 'sugar', .25, 'Cup' );
$granola_muffins->add_ingredient( 'oil', .5, 'Cup' );
$granola_muffins->add_ingredient( 'milk', 1, 'Cup' );
$granola_muffins->add_ingredient( 'vanilla', 1, 'tsp' );
$granola_muffins->add_ingredient( 'white vinegar', .5, 'tsp' );
$granola_muffins->add_ingredient( 'granola', 2, 'Cup' );
$granola_muffins->add_ingredient( 'flour', 1, 'Cup' );
$granola_muffins->add_ingredient( 'instant protein', 4, 'tbsp' );
$granola_muffins->add_ingredient( 'baking powder', 2, 'tsp' );
$granola_muffins->add_ingredient( 'cinnamon', 2, 'tsp' );
$granola_muffins->add_ingredient( 'baking soda', .5, 'tsp' );
$granola_muffins->add_ingredient( 'salt', .5, 'tsp' );
$granola_muffins->add_instruction( 'In a large bowl, combine wet items' );
$granola_muffins->add_instruction( 'In a smaller bowl, dry items' );
$granola_muffins->add_instruction( 'Combine wet and dry mixtures and fold together gently until just mixed. Spoon into a sprayed muffin pan. Sprinkle each muffin top with granola if desired. Bake at 400 for 15 to 20 minutes. Remove from pan and cool on rack.' );
$granola_muffins->add_instruction( '*An hour before you want to make these (or at least a half hour) mix your milk of choice with the white vinegar and allow it to "sour" at room temperature.' );
$granola_muffins->set_yield( '12 large muffins.' );
$granola_muffins->add_tag( 'breakfast, snack, quick bread' );/**/

$belgian_waffles = new Recipe( 'Belgian Waffles' );
$belgian_waffles->add_ingredient( 'Egg', 2 );
$belgian_waffles->add_ingredient( 'Butter', 1, 'Cup' );
$belgian_waffles->add_ingredient( 'sugar', .5, 'Cup' );
$belgian_waffles->add_ingredient( 'milk', 1.5, 'cup' );
$belgian_waffles->add_ingredient( 'vanilla', 2, 'tsp' );
$belgian_waffles->add_ingredient( 'flour', 2, 'cup' );
$belgian_waffles->add_ingredient( 'baking powder', 1, 'tbsp' );
$belgian_waffles->add_instruction( 'Separate eggs. Whip egg whites until stiff peaks form. Set asside.' );
$belgian_waffles->add_instruction( 'Melt butter, and combine with sugar. Add egg yokes and mix well.' );
$belgian_waffles->add_instruction( 'Add milk and vanilla and mix well.' );
$belgian_waffles->add_instruction( 'Add flour and sugar until just combined. ' );
$belgian_waffles->add_instruction( 'Fold in egg whites.' );
$belgian_waffles->add_instruction( 'Follow instructions on waffle maker or add .5 cup of batter to waffle iron and cook for 4 minutes.' );
$belgian_waffles->set_yield( '10 waffles' );
$belgian_waffles->set_source( 'Alena Holligan' );
$belgian_waffles->add_tag( 'breakfast, quick bread' );
$pepper_casserole = new Recipe( 'Ground Turkey Pepper Casserole' );
$pepper_casserole->add_ingredient( 'bell peppers', 6 );
$pepper_casserole->add_ingredient( 'Ground Turkey', 1.5, 'lb' );
$pepper_casserole->add_ingredient( 'Garlic cloves', 2 );
$pepper_casserole->add_ingredient( 'onion', 1 );
$pepper_casserole->add_ingredient( 'rice, cooked', 2, 'cup' );
$pepper_casserole->add_ingredient( 'salt', 1, 'tsp' );
$pepper_casserole->add_ingredient( 'tomato sauce', 15, 'oz' );
$pepper_casserole->add_ingredient( 'Cheddar Cheese', 8, 'oz' );
$pepper_casserole->add_instruction( 'Cut peppers into bite sized pieces. In 4-quart pan, add enough water to cover peppers. Heat to boiling; add peppers. Cook about 4 minutes; drain.' );
$pepper_casserole->add_instruction( 'In 10-inch skillet, cook turkey, garlic and onion over medium heat 8 to 10 minutes, stirring occasionally, until beef is brown; drain.' );
$pepper_casserole->add_instruction( 'Stir in cooked rice, salt and 1 cup of the tomato sauce; cook until hot.' );
$pepper_casserole->add_instruction( 'Pre-heat oven to 350°F.' );
$pepper_casserole->add_instruction( 'Add turky and rice mixture to a 9x13in baking dish. Spread peppers over the rix mixture and poor the remaining tomato sauce over peppers.' );
$pepper_casserole->add_instruction( 'Cover tightly with foil. Bake 10 minutes. Uncover and Sprinkle with cheese. Bake about 10 minutes longer or until peppers are tender and cheese is melted.' );
$pepper_casserole->set_yield( '8 servings' );
$pepper_casserole->set_source( 'Alena Holligan' );
$pepper_casserole->add_tag( 'dinner' );

$lasagna = new Recipe( 'Lasagna' );
$lasagna->add_ingredient( 'Lasagna Noodles', 1, 'lb' );
$lasagna->add_ingredient( 'Sweet Italian Sausage', 1, 'lb' );
$lasagna->add_ingredient( 'Hot Italian Sausage', 1, 'lb' );
$lasagna->add_ingredient( 'Sweet Onion', 2 );
$lasagna->add_ingredient( 'Garlic, chopped', 4, 'tbsp' );
$lasagna->add_ingredient( 'Tomato Sauce', 64, 'oz' );
$lasagna->add_ingredient( 'Sugar', 1, 'tsp' );
$lasagna->add_ingredient( 'Oregano', 2, 'tbsp' );
$lasagna->add_ingredient( 'Parsley', 2, 'tbsp' );
$lasagna->add_ingredient( 'Basil', 4, 'tbsp' );
$lasagna->add_ingredient( 'Salt & Pepper to taste' );
$lasagna->add_ingredient( 'Ricotta Cheese', 8, 'oz' );
$lasagna->add_ingredient( 'Mozzarella Cheese', 16, 'oz' );
$lasagna->add_ingredient( 'Parmesan cheese, grated', .75, 'cup' );
$lasagna->add_instruction( 'In a large skillet, brown sausage over medium high heat, with onions and garlic.' );
$lasagna->add_instruction( 'In a large bowl combine tomato sauce, sugar, seasonings, ricotta cheese and sausage mixture. Mix until ricotta cheese is smooth.' );
$lasagna->add_instruction( 'Preheat oven to 375 degrees F (190 degrees C).' );
$lasagna->add_instruction( 'To assemble, spread 1 1/2 cups of sauce mixture in the bottom of a 9x13 inch baking dish. Arrange UNCOOKED noodles over sauce. Spread with a third of the remaining sauce mixture. Top with a third of the gratted mozzarella cheese. Sprinkle with 1/4 cup Parmesan cheese. Repeat layers of noodles, sauce mixture and cheese 2 more times. Cover with foil: to prevent sticking, either spray foil with cooking spray, or make sure the foil does not touch the cheese.' );
$lasagna->add_instruction( 'Bake in preheated oven for 60 minutes. Remove foil, and bake an additional 15 minutes. Cool for 15 minutes before serving.' );
$lasagna->set_yield( '12 servings' );
$lasagna->set_source( 'Alena Holligan' );
$lasagna->add_tag( 'dinner,italian' );

//Ken Alger
$dried_mushroom_ragout = new Recipe( 'Dried Mushroom Ragout' );
$dried_mushroom_ragout->add_ingredient( 'Pearl Onion', 11, 'oz' );
$dried_mushroom_ragout->add_ingredient( 'Assorted Dried Mushrooms (morels, black fungus, shiitake', 1.3, 'oz' );
$dried_mushroom_ragout->add_ingredient( 'Butter', 2, 'oz' );
$dried_mushroom_ragout->add_ingredient( 'Olive Oil', 2, 'tsp' );
$dried_mushroom_ragout->add_ingredient( 'Salt & Pepper to taste' );
$dried_mushroom_ragout->add_ingredient( 'Sour Cream', 3.5, 'oz' );
$dried_mushroom_ragout->add_instruction( 'Trim ends off pearl onions.' );
$dried_mushroom_ragout->add_instruction( 'Cover with boiling water and let stand for one minute.' );
$dried_mushroom_ragout->add_instruction( 'Drain and slip off skins.' );
$dried_mushroom_ragout->add_instruction( 'Cook the onions in boiling water for 5 minutes.' );
$dried_mushroom_ragout->add_instruction( 'Drain well and spread out on dry paper towels.' );
$dried_mushroom_ragout->add_instruction( 'Cover the mushrooms generously with hot water and let soak for thirty minutes.' );
$dried_mushroom_ragout->add_instruction( 'Pick out the mushrooms.' );
$dried_mushroom_ragout->add_instruction( 'Strain water through a sieve lined with a double layer of cheesecloth.' );
$dried_mushroom_ragout->add_instruction( 'Add enough water to make 2 cups.' );
$dried_mushroom_ragout->add_instruction( 'Reserve liquid.' );
$dried_mushroom_ragout->add_instruction( 'Fry the mushrooms gently in butter and oil for two minutes.' );
$dried_mushroom_ragout->add_instruction( 'Add the onions, salt, pepper, and soaking liquid from the mushrooms.' );
$dried_mushroom_ragout->add_instruction( 'Simmer until virtually all the liquid has evaporated.' );
$dried_mushroom_ragout->add_instruction( 'Stir in the sour cream and simmer for a couple of minutes longer until slightly reduced.' );
$dried_mushroom_ragout->add_instruction( 'Taste and adjust the seasoning and serve.' );
$dried_mushroom_ragout->set_yield( '5, 4 ounce servings.' );
$dried_mushroom_ragout->set_source( 'Alice Kingsleigh' );
$dried_mushroom_ragout->add_tag( 'dinner' );

$rabbit_catalan = new Recipe( 'Rabbit Catalan' );
$rabbit_catalan->add_ingredient( 'Raisins', 1.5, 'oz' );
$rabbit_catalan->add_ingredient( 'Rabbit', 14, 'oz' );
$rabbit_catalan->add_ingredient( 'Seasoned flour' );
$rabbit_catalan->add_ingredient( 'Olive Oil', 4.5, 'tsp' );
$rabbit_catalan->add_ingredient( 'Onions', .75 );
$rabbit_catalan->add_ingredient( 'Tomatoes, skinned, liquidized, and strained', 12, 'oz' );
$rabbit_catalan->add_ingredient( 'Rabbit stock', 7.5, 'oz' );
$rabbit_catalan->add_ingredient( 'Rosemary spring', 1 );
$rabbit_catalan->add_ingredient( 'Bay leaf', .5 );
$rabbit_catalan->add_ingredient( 'Parsley, finely chopped', 1.5, 'tbsp' );
$rabbit_catalan->add_ingredient( 'Salt & Pepper to taste' );
$rabbit_catalan->add_ingredient( 'Garlic cloves', 2 );
$rabbit_catalan->add_ingredient( 'Blanched almonds', 10 );
$rabbit_catalan->add_ingredient( 'Hazlenuts', 10 );
$rabbit_catalan->add_ingredient( 'Saffron threads', .25, 'tsp' );
$rabbit_catalan->add_ingredient( 'Xocolata a la pedra', .5, 'oz' );
$rabbit_catalan->add_instruction( 'Cover the raisins with water and soak 20 minutes.' );
$rabbit_catalan->add_instruction( 'Coat the rabbit in the seasoned flour and brown in olive oil. Set aside.' );
$rabbit_catalan->add_instruction( 'In the same oil, saute the onion until tender and golden.' );
$rabbit_catalan->add_instruction( 'Add the tomatoes, stock, rosemary, bay leaf, half of the parsley, salt and pepper.' );
$rabbit_catalan->add_instruction( 'Simmer gently roughly five minutes.' );
$rabbit_catalan->add_instruction( 'Return the rabbit to the pan, cover, and simmer a further 20 minutes.' );
$rabbit_catalan->add_instruction( 'Turn the rabbit pieces occasionally, adding additional stock if necessary.' );
$rabbit_catalan->add_instruction( 'White the rabbit is simmering, mix the remaining parsley with the garlic (chopped), almonds, hazelnuts, affron, and chocolate.' );
$rabbit_catalan->add_instruction( 'Process in a food processor until smooth.' );
$rabbit_catalan->add_instruction( 'Gradually work in 6.5 ounces of sauce from the rabbit.' );
$rabbit_catalan->add_instruction( 'Spoon this mixture over the rabbit, add the raisins, drained, and stir into the mix.' );
$rabbit_catalan->add_instruction( 'Cover again and continue simmering until the rabbit is done.' );
$rabbit_catalan->add_instruction( 'Taste and adjust seasoning.' );
$rabbit_catalan->set_yield( '4, 7 ounce servings.' );
$rabbit_catalan->set_source( 'Elmer Fudd' );
$rabbit_catalan->add_tag( 'dinner' );

$grilled_salmon_with_fennel = new Recipe( 'Grilled Salmon with Fennel' );
$grilled_salmon_with_fennel->add_ingredient( 'Olive Oil', 2, 'tsp' );
$grilled_salmon_with_fennel->add_ingredient( 'White onion, finely chopped', 1.25, 'cup' );
$grilled_salmon_with_fennel->add_ingredient( 'Large fennel bulbs, finely chopped', 1.25, 'cup' );
$grilled_salmon_with_fennel->add_ingredient( 'Orange liquor', .25, 'oz' );
$grilled_salmon_with_fennel->add_ingredient( 'Salt and Pepper to taste' );
$grilled_salmon_with_fennel->add_ingredient( 'Fresh parsley, finely chopped', 2.5, 'tbsp' );
$grilled_salmon_with_fennel->add_ingredient( 'Fennel leaves, finely chopped', 5, 'tsp' );
$grilled_salmon_with_fennel->add_ingredient( 'Salmon steaks, 5 ounces each', 5 );
$grilled_salmon_with_fennel->add_ingredient( 'Vegetable Oil Spray' );
$grilled_salmon_with_fennel->add_instruction( 'Heat grill to medium-hot.' );
$grilled_salmon_with_fennel->add_instruction( 'For the sauce, briefly heat the olive oil in a large skillet.' );
$grilled_salmon_with_fennel->add_instruction( 'Add the onions and saute until they soften.' );
$grilled_salmon_with_fennel->add_instruction( 'Add the fennel bulb, orange liquor, salt, and pepper.' );
$grilled_salmon_with_fennel->add_instruction( 'Saute until the vegetables are soft.' );
$grilled_salmon_with_fennel->add_instruction( 'Turn off the heat and cover pan to keep warm.' );
$grilled_salmon_with_fennel->add_instruction( 'Stir in parsley and fennel leaves just prior to service.' );
$grilled_salmon_with_fennel->add_instruction( 'Season the salmon with salt and pepper and then spray with the vegetable oil.' );
$grilled_salmon_with_fennel->add_instruction( 'Place on grill.' );
$grilled_salmon_with_fennel->add_instruction( 'Grill for approximately five minutes, then turn and grill for five minutes on the second side or until the fish just starts to flake.' );
$grilled_salmon_with_fennel->add_instruction( 'Serve fish over sauce.' );
$grilled_salmon_with_fennel->set_yield( '4, 6 ounce servings' );
$grilled_salmon_with_fennel->set_source( 'Lord Drinian' );
$grilled_salmon_with_fennel->add_tag( 'dinner' );

$pistachio_duck = new Recipe( 'Duck Breast in Pistachio Crust' );
$pistachio_duck->add_ingredient( 'Duck Breast', 1 );
$pistachio_duck->add_ingredient( 'Pistachios, finely chopped', 1.5, 'tbsp' );
$pistachio_duck->add_ingredient( 'Wild Rice, cooked', 1 / 3, 'cup' );
$pistachio_duck->add_ingredient( 'White Rice, cooked', 1 / 3, 'cup' );
$pistachio_duck->add_ingredient( 'Egg plant', 1 / 4 );
$pistachio_duck->add_ingredient( 'Asparagus spear', 1 );
$pistachio_duck->add_ingredient( 'Duck stock', 8, 'oz' );
$pistachio_duck->add_ingredient( 'Port wine', .5, 'oz' );
$pistachio_duck->add_ingredient( 'Dried cranberries', 10 );
$pistachio_duck->add_ingredient( 'Shallots, minced', 1, 'tsp' );
$pistachio_duck->add_instruction( 'Press pistachios into duck breast.' );
$pistachio_duck->add_instruction( 'Dry fry the breast to give it color, finish in a 350 F oven.' );
$pistachio_duck->add_instruction( 'With cooked rices, combine together along with five of the cranberries that have been allowed to soak in the duck stock long enough to reconstitute.' );
$pistachio_duck->add_instruction( 'Cut egg plant into 1/4 inch slices' );
$pistachio_duck->add_instruction( 'Grill over medium high heat.' );
$pistachio_duck->add_instruction( 'Steam the one asparagus spear until al dente.' );
$pistachio_duck->add_instruction( 'For the sauce, strain any fat off the duck stock.' );
$pistachio_duck->add_instruction( 'Dry saute the shallots just until they start to color.' );
$pistachio_duck->add_instruction( 'Add 2 ounces stock and deglaze the pan.' );
$pistachio_duck->add_instruction( 'Add remaining duck stock, port wine, and the other five reconstituted cranberries and reduce until thickend.' );
$pistachio_duck->add_instruction( 'Serve the eggplant sliced and fanned over a bed of the rice.' );
$pistachio_duck->add_instruction( 'Slice the pistachio crusted duck breast over a pool of cranberry port sauce.' );
$pistachio_duck->set_yield( '1 serving' );
$pistachio_duck->set_source( 'S.J. Sharkie' );
$pistachio_duck->add_tag( 'dinner' );

$chili_pork = new Recipe( 'Pan seared pork tenderloin rolled in a chili peppercrust' );
$chili_pork->add_ingredient( 'Pork tenderloin', 6 );
$chili_pork->add_ingredient( 'Dry chilis, finely ground', 2, 'cup' );
$chili_pork->add_ingredient( 'Olive oil', 1, 'cup' );
$chili_pork->add_ingredient( 'Green chilis, roasted', 10 );
$chili_pork->add_ingredient( 'Garlic, chopped', 2, 'tsp' );
$chili_pork->add_ingredient( 'Cilantro', 3, 'tbsp' );
$chili_pork->add_ingredient( 'Chicken stock', 2, 'cup' );
$chili_pork->add_ingredient( 'Lime Juice', 3, 'tbsp' );
$chili_pork->add_ingredient( 'Red onion, diced', 3, 'tbsp' );
$chili_pork->add_ingredient( 'Olive oil', 2, 'tbsp' );
$chili_pork->add_instruction( "Roll the tenderloins in the ground chili's." );
$chili_pork->add_instruction( 'Heat a saute pan, add a little olive oil and quickly brown tenderloins.' );
$chili_pork->add_instruction( 'Remove from saute pan an dplace in a 350 F oven for about six minutes.' );
$chili_pork->add_instruction( 'Remove from oven and keep warm until ready to serve.' );
$chili_pork->add_instruction( 'For the sauce, clean the chili peppers after roasting, and dice them.' );
$chili_pork->add_instruction( "Heat a small pot, add olive oil, red onion, roasted garlic, and chili's." );
$chili_pork->add_instruction( 'Saute quickly until onion and garlic soften.' );
$chili_pork->add_instruction( 'Add the chicken stock and lime juice and simmer for four minutes.' );
$chili_pork->add_instruction( 'Place mixture into a blender and puree until smooth.' );
$chili_pork->add_instruction( 'Add cilantro before serving with the sliced pork.' );
$chili_pork->set_yield( '12 portions' );
$chili_pork->set_source( 'B.B. Wolf' );
$chili_pork->add_tag( 'dinner' );

$crab_cakes = new Recipe( 'Crab Cakes' );
$crab_cakes->add_ingredient( 'Bell peppers, finely diced', 2, 'cup' );
$crab_cakes->add_ingredient( 'Onion, finely diced', .5 );
$crab_cakes->add_ingredient( 'Celery, finely diced', 2, 'cup' );
$crab_cakes->add_ingredient( 'Fresh green chili, finely diced', 3 );
$crab_cakes->add_ingredient( 'Garlic cloves', 3 );
$crab_cakes->add_ingredient( 'Vegetable oil', .5, 'cup' );
$crab_cakes->add_ingredient( 'Cilantro', 2, 'tbsp' );
$crab_cakes->add_ingredient( 'Flour', 1, 'cup' );
$crab_cakes->add_ingredient( 'Eggs, whipped', 2 );
$crab_cakes->add_ingredient( 'Milk, hot', 1, 'cup' );
$crab_cakes->add_ingredient( 'Dijon Mustard', .25, 'cup' );
$crab_cakes->add_ingredient( 'Salt and Pepper to taste' );
$crab_cakes->add_ingredient( 'Crab meat', 2.5, 'lb' );
$crab_cakes->add_instruction( 'Heat large saute pan, add the vegetable oil.' );
$crab_cakes->add_instruction( 'Add vegetables and cook over medium heat until soft.' );
$crab_cakes->add_instruction( 'Add flour and stir until smooth.' );
$crab_cakes->add_instruction( 'Add milk, stir to make a very smooth mixture without lumps.' );
$crab_cakes->add_instruction( 'Remove from heat and transfer to a large bowl.' );
$crab_cakes->add_instruction( 'Add mustard and mix well.' );
$crab_cakes->add_instruction( 'Add eggs and mix well.' );
$crab_cakes->add_instruction( 'Add minced garlic, herbs, season to taste and let cool.' );
$crab_cakes->add_instruction( 'Drain crab meat until dry.' );
$crab_cakes->add_instruction( 'Add to mixture and form 1 1/2 ounce portions.' );
$crab_cakes->add_instruction( 'Shape into rounds and place in refrigerator until time to prepare.' );
$crab_cakes->add_instruction( 'To prepare for service, saute rounds until GBD (Golden Brown & Delicious).' );
$crab_cakes->add_instruction( 'Serve with a fresh fruit salsa and creme fraiche.' );
$crab_cakes->set_yield( '30 cakes' );
$crab_cakes->set_source( 'S. Bob' );
$crab_cakes->add_tag( 'dinner' );

$beef_medallions = new Recipe( 'Beef Medallions with Ruby Port Sauce' );
$beef_medallions->add_ingredient( 'Beef medallions, 2 ounces', 8 );
$beef_medallions->add_ingredient( 'Shallots', 1, 'tbsp' );
$beef_medallions->add_ingredient( 'Ruby Port', 3, 'oz' );
$beef_medallions->add_ingredient( 'Red wine', 2, 'oz' );
$beef_medallions->add_ingredient( 'Thyme sprig', 1 );
$beef_medallions->add_ingredient( 'Black peppercorns', 1, 'tsp' );
$beef_medallions->add_ingredient( 'Bay leaf', 1 );
$beef_medallions->add_ingredient( 'Demi-glace or meat glaze', 5, 'oz' );
$beef_medallions->add_ingredient( 'Garlic, chopped', 1, 'tsp' );
$beef_medallions->add_ingredient( 'Butter', 1, 'tsp' );
$beef_medallions->add_instruction( 'Pan sear the medallions to carmelize the exterior, finish in oven at 350 F to an internal temperature of 145 F.' );
$beef_medallions->add_instruction( 'Reduce the shallots, port, red wine, thyme, peppercorns, and bay leaf by half.' );
$beef_medallions->add_instruction( 'Add demi-glace and reduce.' );
$beef_medallions->add_instruction( 'Strain sauce, add roasted garlic and finish with butter.' );
$beef_medallions->add_instruction( 'Serve two ounces of sauce with each serving of two medallions.' );
$beef_medallions->set_yield( '4 servings' );
$beef_medallions->set_source( 'P. Buffay' );
$beef_medallions->add_tag( 'dinner' );

$silver_dollar_cakes = new Recipe( 'Silver Dollar Pancakes' );
$silver_dollar_cakes->add_ingredient( 'Eggs', 4 );
$silver_dollar_cakes->add_ingredient( 'Salt', .5, 'tsp' );
$silver_dollar_cakes->add_ingredient( 'Baking soda', .5, 'tsp' );
$silver_dollar_cakes->add_ingredient( 'Cake flour', .25, 'cup' );
$silver_dollar_cakes->add_ingredient( 'Sour cream', 2, 'cup' );
$silver_dollar_cakes->add_ingredient( 'Sugar', 3, 'tbsp' );
$silver_dollar_cakes->add_instruction( 'Put eggs in bowl and blend thouroughly.' );
$silver_dollar_cakes->add_instruction( 'Add the salt, baking soda, flour, sour cream, and sugar. Mix well.' );
$silver_dollar_cakes->add_instruction( 'These cakes are very delicate and require a soft touch when turning.' );
$silver_dollar_cakes->add_instruction( "It is recommended to use only the tip of the spatula and do not attempt to 'flip' the entire cake." );
$silver_dollar_cakes->add_instruction( 'Instead, use a very gentle lift, raise the cake by 1/3 the surface area and fold them over to finish cooking.' );
$silver_dollar_cakes->add_instruction( 'Serve warm.' );
$silver_dollar_cakes->set_yield( '55 dollar size cakes' );
$silver_dollar_cakes->set_source( 'General Bidwell' );
$silver_dollar_cakes->add_tag( 'breakfast' );

$french_toast = new Recipe( 'French Toast' );
$french_toast->add_ingredient( 'Whole eggs', 1, 'quart' );
$french_toast->add_ingredient( 'Milk', 1, 'cup' );
$french_toast->add_ingredient( 'Cinnamon', .5, 'tsp' );
$french_toast->add_ingredient( 'Nutmeg', .25, 'tsp' );
$french_toast->add_ingredient( 'Zest of 1 lemon (blanched)', 1 );
$french_toast->add_ingredient( 'Cornflakes, coarsely crushed', 6, 'cup' );
$french_toast->add_ingredient( 'Bread, sliced 1 inch thick', 24 );
$french_toast->add_ingredient( 'Butter', .25, 'cup' );
$french_toast->add_instruction( 'Whisk together eggs, milk, cinnamon, nutmeg and lemon zest.' );
$french_toast->add_instruction( 'Put cornflakes into a separate shallow dish.' );
$french_toast->add_instruction( 'Dip bread in egg mixture, soak on each side for ten seconds and then coat with cornflakes.' );
$french_toast->add_instruction( 'Heat butter in a non-stick skillet over medium heat.' );
$french_toast->add_instruction( 'Cook the bread in the pan, turning once, until both sides are GBD (Golden brown & delicious)' );
$french_toast->add_instruction( 'Serve warm with choice of toppings.' );
$french_toast->set_yield( '12 servings' );
$french_toast->set_source( 'Rene Francois Artois' );
$french_toast->add_tag( 'breakfast' );

$corn_beef_hash = new Recipe( 'Corn Beef Hash' );
$corn_beef_hash->add_ingredient( 'Cornbeef, small diced', 2, 'lb' );
$corn_beef_hash->add_ingredient( 'Onion, small diced', 1 );
$corn_beef_hash->add_ingredient( 'Bell peppers, small diced', 4 );
$corn_beef_hash->add_ingredient( 'Potatoes, cooked, small diced', 6 );
$corn_beef_hash->add_instruction( 'Saute the onion and bell pepper.' );
$corn_beef_hash->add_instruction( 'Add corn beef, mix and saute for 2 minutes.' );
$corn_beef_hash->add_instruction( 'Add potatoes, mix and saute for 2 minutes.' );
$corn_beef_hash->add_instruction( 'Salt and pepper to taste.' );
$corn_beef_hash->add_instruction( 'Serve warm.' );
$corn_beef_hash->set_yield( '16, 4 ounce servings.' );
$corn_beef_hash->set_source( 'Zygmund Zyzzyx' );
$corn_beef_hash->add_tag( 'breakfast' );

$granola = new Recipe( 'Granola' );
$granola->add_ingredient( 'Rolled oats', 1, 'quart' );
$granola->add_ingredient( 'Rolled wheat', 1, 'cup' );
$granola->add_ingredient( 'Rolled rye', 1, 'cup' );
$granola->add_ingredient( 'Rolled barley', 1, 'cup' );
$granola->add_ingredient( 'Nutmeg', 1, 'tsp' );
$granola->add_ingredient( 'Cinnamon', .5, 'tsp' );
$granola->add_ingredient( 'Salt', .125, 'tsp' );
$granola->add_ingredient( 'Honey', 1.25, 'cup' );
$granola->add_ingredient( 'Vegetable oil', .75, 'cup' );
$granola->add_ingredient( 'Almonds', 1.5, 'cup' );
$granola->add_ingredient( 'Golden raisins', 1, 'cup' );
$granola->add_instruction( 'Mix grains and spices together.' );
$granola->add_instruction( 'Combine honey and oil together until completely combined.' );
$granola->add_instruction( 'Blend the grain mixture in with the honey mixture.' );
$granola->add_instruction( 'Spread on a sheet pan and toast in oven at 300 F for approxmiately 7 minutes.' );
$granola->add_instruction( 'Remove from oven and while cooling add in rasisns.' );
$granola->add_instruction( 'Store in an air tight container.' );
$granola->set_yield( '1 sheet pan' );
$granola->set_source( 'H. Crowell' );
$granola->add_tag( 'breakfast' );

$spicy_omelette = new Recipe( 'Spicy Omelette' );
$spicy_omelette->add_ingredient( 'Butter', 2, 'tbsp' );
$spicy_omelette->add_ingredient( 'Green chili pepper, seeded & diced', 2 );
$spicy_omelette->add_ingredient( 'Kielbasa sausage', 4, 'oz' );
$spicy_omelette->add_ingredient( 'Onion, diced', 3, 'tbsp' );
$spicy_omelette->add_ingredient( 'Tomato concasse', 2, 'tbsp' );
$spicy_omelette->add_ingredient( 'Eggs, beaten', 3 );
$spicy_omelette->add_ingredient( 'Pepper-Jack cheese, shredded', 3, 'tbsp' );
$spicy_omelette->add_instruction( 'Preheat a nonstick omelette pan and melt 1 Tbsp. butter in the pan.' );
$spicy_omelette->add_instruction( 'Add the chili pepper, sausage, and onion.' );
$spicy_omelette->add_instruction( 'Saute until the vegetables start to soften and the sausage is lightly browned.' );
$spicy_omelette->add_instruction( 'Add the tomato and cook to heat through (about 20 seconds)' );
$spicy_omelette->add_instruction( 'Transfer mixture to a bowl and cover to keep warm.' );
$spicy_omelette->add_instruction( 'Melt the additional 1 Tbsp. butter. ' );
$spicy_omelette->add_instruction( 'Add the eggs and cook, without stirring, for about two minutes.' );
$spicy_omelette->add_instruction( 'Use a high temperature spatula to lift the edges allowing the uncooked egg to flow beneath the cooked portion.' );
$spicy_omelette->add_instruction( 'Cook until the eggs are almost set and then flip the omelette in the pan.' );
$spicy_omelette->add_instruction( 'Cook for 45 seconds to set eggs and then flip the omelette again.' );
$spicy_omelette->add_instruction( 'Arrange the sausage mixture and then the cheese in the center of the omelette.' );
$spicy_omelette->add_instruction( "Tri-fold the eggs over the mixture and 'roll' the omlette seam side down" );
$spicy_omelette->add_instruction( 'Cook an additional 30 seconds to finish cooking the eggs and to melt the cheese' );
$spicy_omelette->add_instruction( 'Slide the omelette onto a plate, top with extra cheese. Serve hot' );
$spicy_omelette->set_yield( '1 serving' );
$spicy_omelette->set_source( 'S. Gonzales' );
$spicy_omelette->add_tag( 'breakfast' );

$scones = new Recipe( 'Orange Cranberry Scones' );
$scones->add_ingredient( 'All purpose flour', 3, 'cup' );
$scones->add_ingredient( 'Sugar', .333, 'cup' );
$scones->add_ingredient( 'Baking powder', 2.5, 'tsp' );
$scones->add_ingredient( 'Salt', 1, 'tsp' );
$scones->add_ingredient( 'Baking soda', .5, 'tsp' );
$scones->add_ingredient( 'Orange zest', 1, 'tbsp' );
$scones->add_ingredient( 'Butter, unsalted & chilled, 1/2 pieces', .75, 'cup' );
$scones->add_ingredient( 'Cranberries, dried', .75, 'cup' );
$scones->add_ingredient( 'Heavy cream, cold', 1, 'cup' );
$scones->add_ingredient( "Confectioner's sugar", .5, 'cup' );
$scones->add_ingredient( 'Orange juice, freshly squeezed', 4, 'tsp' );
$scones->add_instruction( 'Preheat oven to 400 F.' );
$scones->add_instruction( 'Line a baking sheet with parchment paper.' );
$scones->add_instruction( 'Sift together dry ingredients into a large bowl.' );
$scones->add_instruction( 'Mix in orange zest.' );
$scones->add_instruction( 'Add butter and cut into dry ingredients until the mixture resembles coarse meal.' );
$scones->add_instruction( 'Mix in dried cranberries.' );
$scones->add_instruction( 'Gradually add cream until moist clumbs form.' );
$scones->add_instruction( 'Move dough to a lightly floured work surface and knead about four turns to bind the dough.' );
$scones->add_instruction( 'Form dough into a round 1 inch thick.' );
$scones->add_instruction( 'Cut into 10 pieces and transfer to baking sheet.' );
$scones->add_instruction( 'Bake in oven until the tops are golden brown, approximately 25 minutes.' );
$scones->add_instruction( 'Remove from oven and let cool on the baking sheet for 10 minutes.' );
$scones->add_instruction( "Whisk together the confectioner's sugar and orange juice." );
$scones->add_instruction( 'Lightly drizzle over the scones while still warm.' );
$scones->set_yield( '10 scones' );
$scones->set_source( 'Beryl Patmore' );
$scones->add_tag( 'breakfast' );
