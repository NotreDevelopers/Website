<?php

 error_reporting(E_ALL); ini_set("display_errors", 1); require 'home/vendor/autoload.php';
// This is the composer autoloader. Used by
// the markdown parser and RSS feed builder.
require 'home/vendor/autoload.php';

// Explicitly including the dispatch framework,
// and our functions.php file
require 'home/app/includes/dispatch.php';
require 'home/app/includes/functions.php';

// Load the configuration file
config('source', 'home/config.ini');

// The front page of the blog.
// This will match the root url
get('/index', function () {

	$page = from($_GET, 'page');
	$page = $page ? (int)$page : 1;

	$posts = get_posts($page);

	if(empty($posts) || $page < 1){
		// a non-existing page
		not_found();
	}

    render('main',array(
    	'page' => $page,
		'posts' => $posts,
		'has_pagination' => has_pagination($page)
	));
});

// The post page
get('/:year/:month/:name',function($year, $month, $name){

	$post = find_post($year, $month, $name);

	if(!$post){
		not_found();
	}

	render('post',array(
		'title' => $post->title .' ⋅ ' . config('blog.title'),
		'p' => $post
	));
});

// The JSON API
get('/api/json',function(){

	header('Content-type: application/json');

	// Print the 10 latest posts as JSON
	echo generate_json(get_posts(1, 10));
});

// If we get here, it means that
// nothing has been matched above

get('.*',function(){
	not_found();
});

// Serve the blog
dispatch();
