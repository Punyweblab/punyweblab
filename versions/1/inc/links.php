<?php 

// this file controls the links and 
// text that are teh same from page to page


//PAGE
$page = array(
		'home' => array(
			'title' => "Punyweblab - I'm Jefry and I'm a web developer + designer.",
			'link' => 'href="index.php"'
			),

		'about' => array(
			'title' => "Punyweblab - About Me",
			'link' => 'href="about.php"'
			),

		'contact' => array(
			'title' => "Punyweblab - Contact Me",
			'link' => 'href="contact.php"'
			)
	);
/*end of page array*/



// This statement will declare a value 
//to the title depending on what page the 
//user is viewing

if ($current_page == "home") {
	$title = $page['home']['title'];
}
elseif ($current_page == "about") {
	$title = $page['about']['title'];
}
else{
	$title = $page['contact']['title'];
}

?>