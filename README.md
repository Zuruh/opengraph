# Open Graph Protocol helper for PHP

A small library for making accessing of Open Graph Protocol data easier

## Note
Keys with a dash (-) in the name are converted to _ for easy access as a property
in PHP

Keys with _ aditional are values read with name (non-OpenGraph Standard) instead of property (OpenGraph Standard)

## Required Extensions
* DOM for parsing

## Usage
	require 'OpenGraph.php';
	$o = OpenGraph::fetch(
	'http://hashtiv.link/7n55ZnyVim'
	);

	$array =  (array) $o;
	$array = str_replace('\\u0000', "", json_encode($array));
	$array = json_decode($array, true);
	
	print_r($array); /*Prints the array*/
	echo('title:'.$array['OpenGraph_values']['title'].'<br>'); /*Access Specific Data*/
## Result
	[OpenGraph_values] => Array (
	    [title] => Build software better, together
	    [hashtiv_title] => Build software better, together
	    [hashtiv_title_additional] => Array (
		[0] => Build software better, together
		)
	    [description] => GitHub is where people build software. More than 28 million people use GitHub to discover, fork, and contribute to over 85 million projects.
	    [hashtiv_description] => GitHub is where people build software. More than 28 million people use GitHub to discover, fork, and contribute to over 85 million projects.
	    [hashtiv_description_additional] => Array (
		[0] => GitHub is where people build software. More than 28 million people use GitHub to discover, fork, and contribute to over 85 million projects.
		)
	    [image] => https://assets-cdn.github.com/images/modules/open_graph/github-logo.png
	    [twitter_image] => https://assets-cdn.github.com/images/modules/open_graph/github-logo.png
	    [twitter_image_additional] => Array (
		[0] => https://assets-cdn.github.com/images/modules/open_graph/github-logo.png
		)
	    [hashtiv_image] => https://assets-cdn.github.com/images/modules/open_graph/github-logo.png
	    [hashtiv_image_additional] => Array (
		[0] => https://assets-cdn.github.com/images/modules/open_graph/github-logo.png
		)
	    [hashtiv_display] => square
	    [hashtiv_display_additional] => Array (
		[0] => square
		)
	    )
	[OpenGraph_position] => 0
