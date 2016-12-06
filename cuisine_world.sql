-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2016 at 09:43 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cuisine_world`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `p_id` int(100) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`p_id`, `ip_add`, `qty`) VALUES
(3, '::1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cuisines`
--

CREATE TABLE IF NOT EXISTS `cuisines` (
  `cui_id` int(10) NOT NULL AUTO_INCREMENT,
  `cui_title` text NOT NULL,
  PRIMARY KEY (`cui_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `cuisines`
--

INSERT INTO `cuisines` (`cui_id`, `cui_title`) VALUES
(1, 'Pakistani'),
(2, 'Maxican'),
(3, 'Turkish'),
(4, 'Chineese'),
(5, 'Italian'),
(6, 'French');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE IF NOT EXISTS `food` (
  `food_id` int(10) NOT NULL AUTO_INCREMENT,
  `food_title` text NOT NULL,
  PRIMARY KEY (`food_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`food_id`, `food_title`) VALUES
(1, 'Meat'),
(2, 'Soup'),
(3, 'Rice'),
(4, 'Vegetable'),
(5, 'Salad'),
(6, 'Others'),
(7, 'Drinks');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(10) NOT NULL AUTO_INCREMENT,
  `cui_id` int(10) NOT NULL,
  `food_id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `product_title` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_img3` text NOT NULL,
  `product_price` text NOT NULL,
  `product_desc` text NOT NULL,
  `product_keywords` text NOT NULL,
  `status` text NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `cui_id`, `food_id`, `date`, `product_title`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `product_desc`, `product_keywords`, `status`) VALUES
(1, 1, 1, '2016-06-15 05:00:41', 'Chicken Sajji ', 'Chicken sajji.jpg', '', '', '1 whole chicken with skin 20 gm garlic 15 gm ginger garlic paste 1 tsp cumin powder 1 tsp coriander powder 1 tsp garam masala', 'In a pan take red chilli powder, salt, lemon juice, ginger & garlic paste, cumin powder, coriander powder, garam masala pounded, and a little yellow color. This above marinade needs to be applied to the chicken 8 hours in advance.\r\nMarinate the chicken with garlic and salt, keep this for an hour and then wash this off.\r\nDry the chicken. Then barbeque it on charcoal fire or tandoor. Garnish appropriately.\r\n', 'Chicken Sajji , Pakistani , Meat', 'on'),
(2, 1, 4, '2016-06-15 05:04:37', 'Shahi Tukra', 'Shahi Tukra.jpg', '', '', '2 Tbsp refined oil 2 bread slices 100 ml milk 2 Tbsp sugar free Saffron, a pinch 25 gms raisins 25 gms cashew nuts', 'In a pan, fry bread slice with little bit of oil and keep it on the plate.\r\nIn a pan, add milk, sugar free and saffron. Mix them well together. \r\nAdd raisins and cashew nuts into it and mix them well.\r\nIn plate, place the toasted bread and pour the mix over it.\r\nServe hot.\r\n', 'Shahi Tukra, Pakistani, Vegetable', 'on'),
(3, 1, 1, '2016-06-15 05:07:37', 'Mutton Bhuna Gosht', 'Mutton bhunna gosht.jpg', '', '', '3 Tbsp raw papaya paste 150 g ghee 4 Tbsp ginger-garlic paste 200 g brown onions 6 medium tomatoes 1/4 tsp nutmeg powder 2 tsp turmeric powder 2 Tbsp red chilli powder Salt to taste 1 kg mutton leg - boneless cubes 2 bay leaves 2 cinnamon sticks 3 black cardamom 3-4 cloves 2 tsp cumin seeds 4 green chillies 2 cups khatta dahi 1 cup milk 300 g basmati rice 1/2 tsp cumin seeds (zeera) Salt to taste', 'Method:\r\nRub raw papaya paste on mutton pieces and keep aside.\r\nIn a brass pot, add ghee and saute ginger-garlic paste. Add brown onions and saute for 1-2 minutes.\r\nThen add tomatoes and all the powder spices. Mix well and add mutton.\r\nCook for 10-15 minutes till little dry.\r\nThen add all the whole spices, whole green chillies and khatta dahi alongside.\r\nCook again for 10 minutes, then add 3 cups water and allow to steam for 30 minutes.\r\nRemove lid and dry out excess water on high flame.\r\nNow add milk and mix well.\r\nOnce meat is tender, dish is ready.\r\nSteam rice with cumin seeds and salt.\r\nServe hot with mutton gosht.\r\n', 'Mutton Bhuna Gosht, Pakistani Cuisine, Meat', 'on'),
(4, 1, 1, '2016-06-15 05:09:31', 'Tawa Tarka Keema', 'Tawa Tarka Qeema.jpg', '', '', '1 Tbsp garlic, chopped 1 Tbsp ginger, chopped 300 gm desi ghee 3 green chillies 2 tsp red chilli, crushed 1 tsp kasoori methi 2 tsp turmeric powder 1 tsp garam masala powder 1 tsp fennel seeds, crushed 1 Tbsp mango pickle paste Salt to taste 4 onions 2 spring onions 5 tomatoes 500 gm chicken mince, hand chopped 1/2 bunch fresh coriander', 'Method:\r\nSaute garlic and ginger on tawa with desi ghee and add all the spices along with the onions, chopped tomatoes and pickle paste and cook well.\r\nThen add mince, cook for at least 10 minutes and finally put fresh coriander and serve it on sizzling platter.\r\n\r\n', 'Tawa Tarka Keema, Pakistani, Meat', 'on'),
(5, 1, 1, '2016-06-15 05:12:14', 'Peshawari Chappali Kebab', 'Peshawari chappali kabab.jpg', '', '', '1 Kg Lamb Mince 1 Tbsp Coriander Seeds, Whole 1/2 Tsp Cumin Seeds 1 Tsp Red Chilli, Crushed 1 Tsp Salt (Or To Taste) 2 Large Onions, Chopped 5 Tomatoes, Chopped 1 1/2 Cup Gram Flour (Besan) 3 Eggs 2 Tbsp Pomegranate Seeds (Anar Dana) 2 Tbsp Ginger, Chopped 300 G Cooking Fat/ Ghee  For Sauce: 500 Gm Dry Apricots 250 Gm Jaggery (Gur) 200 Gm Raisins 250 Gm Lemons Salt To Taste', '\r\n\r\nMethod:\r\nFor Peshawari Chappali Kebab:\r\nMix all the spices with the lamb mince and mash it well.\r\nMix in chopped onions, tomatoes and gram flour.\r\nFold in eggs with a light hand.\r\nNow add pomegranate seeds and chopped ginger. Keep aside in refrigerator for 5 minutes.\r\nAfter the mixture is set, make flat elongated kebabs out of it.\r\nPlace a tomato slice on kebab and fry both sides in cooking fat or ghee.\r\nKeep aside and fry once more to cook through.\r\n\r\nFor Sauce:\r\nPut all ingredients in 1 cup water and boil.\r\nReduce for 10-15 minutes.\r\nOnce done, take off heat and whisk the sauce till smooth.\r\nServe with Peshawari chappali kebab.\r\n', 'Peshawari Chappali Kebab, Pakistani, Meat', 'on'),
(6, 6, 6, '2016-06-15 05:21:43', 'FOUR-HOUR BAGUETTE', 'four hour baguette.jpg', '', '', '1 1â„2 cups (12 oz.) tap water, heated to 115Â° 1 tsp. (1â„8 oz.) active dry yeast 3 1â„4 cups (14 2â„3 oz.) allâ€“purpose flour 1 1â„2 tsp. (3â„8 oz.) kosher salt Canola oil, for greasing bowl 1â„2 cup ice cubes', 'Method:\r\nWhisk together water and yeast in a large bowl; let sit until yeast is foamy, about 10 minutes. Add flour, and stir with a fork until dough forms and all flour is absorbed; let dough sit to allow flour to hydrate, about 20 minutes. Add salt (Figure A); transfer dough to a lightly floured work surface, and knead until smooth and elastic, about 10 minutes. Transfer dough ball to a lightly greased bowl; cover bowl with plastic wrap, and place bowl in a cold oven. Let dough rest until doubled in size, about 45 minutes.\r\nTransfer dough to a lightly floured work surface, and shape into an 8â€³ x 6â€³ rectangle. Fold the 8â€³ sides toward the middle (Figure B), then fold the shorter sides toward the center. Return dough, seam side down, to bowl. Cover with plastic again, and return to oven; let sit until doubled in size, about 1 hour.\r\nRemove bowl with dough from oven, and place a castâ€“iron skillet on the bottom rack of oven; position another rack above skillet, and place a baking stone on it.\r\nHeat oven to 475Â°. Transfer dough to a lightly floured work surface, and cut into three equal pieces; shape each piece into a 14â€³ rope (Figure C). Flour a sheet of parchment paper on a rimless baking sheet; place ropes, evenly spaced, on paper. Lift paper between ropes to form pleats; place two tightly rolled kitchen towels under long edges of paper, creating supports for the loaves. Cover loosely with plastic wrap; let sit until it doubles in size, about 50 minutes.\r\nUncover; remove towels, and flatten paper to space out loaves. Using a sharp razor or paring knife, slash the top of each baguette at a 30â€“degree angle in four spots (Figure D); each slash should be about 4â€³ long. Using the corner of the parchment paper as a guide, slide the loaves, still on the parchment paper, onto the baking stone. Place ice cubes in skillet (this produces steam that lets the loaves rise fully before a crust forms). Bake the baguettes until darkly browned and crisp, about 30 minutes; cool before serving.\r\n\r\n', 'FOUR-HOUR BAGUETTE, French', 'on'),
(7, 6, 5, '2016-06-15 05:24:09', 'Potato Salad with Herring', 'Potato Salad with Herring.jpg', '', '', '1 lb. fingerling potatoes 1â„4 cup finely chopped white onion 2 tbsp. finely chopped chives 2 tbsp. olive oil 2 tbsp. red wine vinegar 2 tbsp. white wine 2 cured herring fillets cut into 1â„2-inch pieces (about 5 oz.) Kosher salt and freshly ground pepper', 'In a medium saucepan, cover the potatoes with water and boil until tender, 15 minutes. Cool slightly, then slice into 1-inch pieces.\r\nToss potatoes in a large bowl with remaining ingredients and serve warm.\r\n', 'Potato Salad With Herring, French, Salad', 'on'),
(8, 2, 3, '2016-06-15 05:37:33', 'Mexican Rice', 'Mexican Rice.jpg', '', '', '3 tablespoons vegetable oil  2/3 cup diced onion  1 1/2 cups uncooked white rice  1 cup chopped green bell  Pepper  1 teaspoon  Ground cumin  1 teaspoon chili powder r 1 1/2 (8 ounce) cans tomato sauce  2 teaspoons salt  1 clove garlic Minced 1/8 teaspoon  Powdered saffron 3 cups water', 'In a large saucepan, heat vegetable oil over a medium-low heat. Place the onions in the pan, and saute until golden.\r\nAdd rice to pan, and stir to coat grains with oil. Mix in green bell pepper, cumin, chili powder, tomato sauce, salt, garlic, saffron, and water. Cover, bring to a boil, and then reduce heat to simmer. Cook for 30 to 40 minutes, or until rice is tender. Stir occasionally.\r\n', 'Mexican Rice, Mexican, Rice', 'on'),
(9, 2, 5, '2016-06-15 05:39:18', 'Guacamole', 'Guacamole.jpg', '', '', '3 avocados - peeled, pitted, and mashed  1 lime juice 1 teaspoon salt  1/2 cup diced onion  3 tablespoons chopped fresh cilantro  2 roma (plum)  Tomatoes diced  1 teaspoon minced garlic  1 pinch ground cayenne pepper (optional)', 'In a medium bowl, mash together the avocados, lime juice, and salt. Mix in onion, cilantro, tomatoes, and garlic. Stir in cayenne pepper. Refrigerate 1 hour for best flavor, or serve immediately.', 'Guacamole, Mexican, Salad', 'on'),
(10, 3, 2, '2016-06-15 05:49:04', 'Turkish Red Lentil Soup with Mint', 'Turkish Red Lentil Soup with Mint.jpg', '', '', '2 Tablespoons Olive Oil  1/2 Onion  Diced 1 Clove Garlic  Minced 1/4 Cup Diced Tomatoes  Drained 5 Cups Chicken Stock  1/2 Cup Red Lentils  1/4 Cup Fine Bulgur  1/4 Cup Rice  2 Tablespoons Tomato Paste  1 Teaspoon Paprika  1/2 Teaspoon Cayenne Pepper (Optional)  1 Tablespoon Dried Mint Salt And Ground Black Pepper To Taste', 'Method:\r\nHeat the olive oil in a large pot over high heat. Cook and stir the onion in the hot oil until it begins to soften, about 2 minutes. Stir the garlic into the onion and cook another 2 minutes. Add the diced tomatoes to the onion mixture; continue to cook and stir another 10 minutes.\r\nPour in the chicken stock, red lentils, bulgur, rice, tomato paste, paprika, cayenne pepper, and mint to the tomato mixture; season with salt and black pepper. Bring the soup to a boil, reduce heat to medium-low, and cook at a simmer until the the lentils and rice are cooked through, about 30 minutes.\r\nPour the soup into a blender to no more than half full. Firmly hold the lid in place and carefully start the blender, using a few quick pulses to get the soup moving before leaving it on to puree. Puree in batches until smooth; pour into your serving dish. Alternately, you can use a stick blender and puree the soup in cooking pot.\r\n', 'Turkish Red Lentil Soup With Mint, Turkish, Soup', 'on'),
(11, 3, 5, '2016-06-15 05:50:32', 'Zucchini Salad with Yogurt and Walnuts', 'Zucchini Salad with Yogurt and Walnuts.jpg', '', '', '2 Tablespoons Olive Oil 2 Zucchini Grated 2 Cups Plain Yogurt  2 Tablespoons Walnuts Chopped Salt And Pepper To Taste', 'Method:\r\nHeat the oil in a skillet over high heat. Cook and stir the grated zucchini for 3 minutes, stirring constantly. Remove from heat and let cool.\r\nMix the zucchini with the yogurt and walnuts, and season with salt and pepper.\r\n', 'Zucchini Salad With Yogurt And Walnuts, Turkish, Salad', 'on'),
(12, 3, 1, '2016-06-15 05:51:57', 'Iskender Kebab', 'Iskender Kebab.jpg', '', '', '4 Pita Bread Rounds  1 Tablespoon Olive Oil  4 Skinless  Boneless Chicken Breast Halves  Chopped 2 Medium Onion  Chopped 1 Clove Garlic   Can Tomato Puree  Ground Cumin To Taste  Salt To Taste  Ground Black Pepper To Taste  1/2 Cup Butter  Melted 1 Cup Greek Yogurt  1/4 Cup Chopped Fresh Parsley', 'Method:\r\nPreheat oven to 350 degrees F (175 degrees C). Arrange pita bread on a baking sheet, and lightly toast in the oven. Cut pita bread into bite-size pieces, and keep warm.\r\nHeat the olive oil in a skillet over medium heat. Stir in the chicken, onion, and garlic, and cook until chicken juices run clear. Mix in tomato puree. Season with cumin, salt, and pepper. Continue cooking 10 minutes.\r\nArrange pita pieces in a serving dish. Drizzle with butter, and top with the chicken mixture. Garnish with yogurt and parsley to serve.\r\n', 'Iskender Kebab, Turkish, Meat', 'on'),
(13, 4, 3, '2016-06-15 06:09:35', 'Stir Fried Tofu with Rice', 'Stir Fried Tofu with Rice.jpg', '', '', 'For the tofu: 100 gm tofu 2 tsp red chilly paste 1 stick lemon grass 2 shallots chopped 1 inch ginger chopped 2 tsp soya sauce  3 cloves garlic chopped 1 inch red onion chopped 2 tsp honey Handful chopped coriander leaves 1 tsp refined oil   For the fried rice: Chopped carrots Chopped spring onions Salt & pepper to flavor. 1 fresh red chilly chopped 1 piece chopped ginger 2 tsp soya sauce  1/2 a lemon squeezed Handful chopped coriander leaves 1 tsp olive oil', 'Method:\r\nDrizzle refined oil in a preheated pan and add chopped mariner and stir well. \r\nThen add ginger, garlic, shallots and salt & pepper. \r\nAdd red chilly paste, soya sauce and honey.\r\nAdd some coriander leaves and mix it all together.\r\nFor the fried rice:\r\nDrizzle olive oil in a pre-heated pan and add carrots, spring onions, ginger and salt & pepper.\r\nThen add fresh red chilly, lemon juice and soya sauce and stir all together.\r\nAdd some chopped coriander leaves.\r\nCook it away for 5-7 minutes.\r\nServe it on a platter.\r\n\r\n', 'Stir Fried Tofu With Rice, Chinese, Rice', 'on'),
(14, 4, 1, '2016-06-15 06:10:59', 'Chicken Manchurian', 'Chicken Manchurian.jpg', '', '', '250 Gm Chicken Mince  2 Eggs, Slightly Beaten  3/4 Cup Refined Flour  1/2 Tsp Garlic Paste  1/2 Tsp Ginger Paste  Oil For Deep Frying  2 Tbsp Oil 1 Tsp Finely Chopped Garlic  1/2 Cup Finely Chopped Onions  1 Large Capsicum-Chopped Fine  For Sauce, Mix Together:  3 Tbsp Corn Flour-Blended 1/2 Cup Water  2 Tbsp Vinegar  2 Tsp Salt  2 Tsp Soya Sauce  1/2 Cup Tomato Puree  2 Tbsp Chopped Celery Or 1/4 Tsp Celery Salt  2 Cups Water', 'Method:\r\nMix together the chicken, egg, flour, garlic and ginger paste, ajino moto and enough water so as to have a thick batter. Leave this for 5-10 minutes.\r\nHeat the oil, keeping the heat high drop heaped teaspoonfuls of batter and fry to a golden brown. Drain on absorbent paper till required. \r\nHeat 2 Tbsp of oil, and stir-fry the garlic and onion in it over high heat, till the onions look glossy. Add the capsicum and turn around a few times.\r\n Add the sauce mixture, and simmer till the sauce thickens and becomes translucent. \r\nAdd the fried balls, turn around a few times and serve.\r\n', 'Chicken Manchurian, Chinese, Meat', 'on');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
