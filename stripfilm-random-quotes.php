<?php
/*
Plugin Name: Stripfilm Random Quotes
Plugin URI: http://stripfilm.com
Description: Stripfilm specific plugin to show random quotes from authors of Stripfilm. (mostly derived from "hello dolly!")
Version: 1.0
Author: Kemal Yılmaz
Author URI: http://missofis.com
License: Missofis BB.
License Details: (Missofis BB License. BB stands for "Beleş Beleş" which is also quoted from a famous movie named Kibar Feyzo, directed by Atıf Yilmaz in 1978)
*/

// merges default quotes array and user quotes array and returns a random quote
function get_a_random_quote() {

	// default quotes array
	$quotes_default = array(

		"Tpüh! Şansım yok ölemedim - Şekerpare",
		"Ama ne bekçi; zeki, çalışkan, kaplan gibi - Şekerpare",
		"Uç ula, uç, pır pırr, cik cik, pırr pır pırpır - Kibar Feyzo",
		"Sen daha iyi bilirsin amma agam, maraba kısmı agalığa özenir mi, düzenin bozulmıy mi? - Kibar Feyzo",
		"Oh be! ölünce ne kadar rahatladım - Meraklı Köfteci",
		"Peki niye hep ben ölüyorum yau - Meraklı Köfteci",
		"Life happened! - Liberal Arts",
		"I just had the least romantic night of my life with a romantics professor - Liberal Arts",
		"God? Hey! God? You listening? You can't take her away. Okay? - A Little Bit of Heaven",
		"Your butt is your business - A Little Bit of Heaven",
		"Go fuck yourself - X-Men First Class",
		"Now, we are fucked - Snatch",
		"Doc! - Back to the Future",
		"No subject is terrible if the story is true - Midnight in Paris",
		"If you're a writer, declare yourself the best writer - Midnight in Paris",
		"I'm Jewish by the way - It's a Disaster",
		"Dude! - The Big Lebowski",
		"Nobody fucks with the Jesus! - The Big Lebowski",
		"Everything is sharks, life is sharks - Mental",
		"And I don't like whities, as a rule, bu Shaz.. Shaz isn't white - Mental",
		"What am I doing? Why am I doing this? - Safety Not Guaranteed",
		"Ow, ow, fuckity, ow! - Juno",
		"Is that what this is about? - It's a Disaster",
		"l don't wanna be just theoretically gay, I wanna do something about it - Beginners",
		"You didn't ask her out! You just fix her antenna and you left? - The Sorcerer's Apprentice",
		"You doing yoga? Can I watch? - Seven Psycophats"

	);

	// user quotes array (merged with defaults)
	$quotes_user = array();

	// merged quotes array
	$quotes = array_merge($quotes_default, $quotes_user);

	// get a random quote
	return $quotes[array_rand($quotes)];

} /* EOF: random quote selector */

// echo random quote
function print_quote() {

	// get random quote
	$quote = get_a_random_quote();

	// print quote in a * container
	echo "<div class=\"stripfilm-random-quote\"><p>$quote</p></div>";

} /* EOF: quote echoer */

// add notice action hook
add_action('admin_notices', 'print_quote');

// add some styles to stripfilm quote
function add_quote_styles() {

	// css
	echo "
	<style type='text/css'>
	.stripfilm-random-quote { position:relative; clear: both; }
	.stripfilm-random-quote p { font-size: 11px; color: #444; font-style: italic; text-align: right; padding: 10px 26px 0 10px; }
	</style>";

} /* EOF: add quote styles */

// add style action
add_action('admin_head', 'add_quote_styles');

?>