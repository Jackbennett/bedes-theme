<?php
// $Id: template.php,v 1.21 2009/08/12 04:25:15 johnalbin Exp $

/**
 * @file
 * Contains theme override functions and preprocess functions for the theme.
 *
 * ABOUT THE TEMPLATE.PHP FILE
 *
 *   The template.php file is one of the most useful files when creating or
 *   modifying Drupal themes. You can add new regions for block content, modify
 *   or override Drupal's theme functions, intercept or make additional
 *   variables available to your theme, and create custom PHP logic. For more
 *   information, please visit the Theme Developer's Guide on Drupal.org:
 *   http://drupal.org/theme-guide
 *
 * OVERRIDING THEME FUNCTIONS
 *
 *   The Drupal theme system uses special theme functions to generate HTML
 *   output automatically. Often we wish to customize this HTML output. To do
 *   this, we have to override the theme function. You have to first find the
 *   theme function that generates the output, and then "catch" it and modify it
 *   here. The easiest way to do it is to copy the original function in its
 *   entirety and paste it here, changing the prefix from theme_ to kipl_.
 *   For example:
 *
 *     original: theme_breadcrumb()
 *     theme override: bedes_breadcrumb()
 *
 *   where STARTERKIT is the name of your sub-theme. For example, the
 *   zen_classic theme would define a zen_classic_breadcrumb() function.
 *
 *   If you would like to override any of the theme functions used in Zen core,
 *   you should first look at how Zen core implements those functions:
 *     theme_breadcrumbs()      in zen/template.php
 *     theme_menu_item_link()   in zen/template.php
 *     theme_menu_local_tasks() in zen/template.php
 *
 *   For more information, please visit the Theme Developer's Guide on
 *   Drupal.org: http://drupal.org/node/173880
 *
 * CREATE OR MODIFY VARIABLES FOR YOUR THEME
 *
 *   Each tpl.php template file has several variables which hold various pieces
 *   of content. You can modify those variables (or add new ones) before they
 *   are used in the template files by using preprocess functions.
 *
 *   This makes THEME_preprocess_HOOK() functions the most powerful functions
 *   available to themers.
 *
 *   It works by having one preprocess function for each template file or its
 *   derivatives (called template suggestions). For example:
 *     THEME_preprocess_page    alters the variables for page.tpl.php
 *     THEME_preprocess_node    alters the variables for node.tpl.php or
 *                              for node-forum.tpl.php
 *     THEME_preprocess_comment alters the variables for comment.tpl.php
 *     THEME_preprocess_block   alters the variables for block.tpl.php
 *
 *   For more information on preprocess functions and template suggestions,
 *   please visit the Theme Developer's Guide on Drupal.org:
 *   http://drupal.org/node/223440
 *   and http://drupal.org/node/190815#template-suggestions
 */

/**
 * Implementation of HOOK_theme().
 */
function bedes_theme(&$existing, $type, $theme, $path) {
  $hooks = zen_theme($existing, $type, $theme, $path);
  // Add your theme hooks like this:
  /*
  $hooks['hook_name_here'] = array( // Details go here );
  */
  // @TODO: Needs detailed comments. Patches welcome!
  return $hooks;
}

/**
 * Implementation of moduleName_preprocess_hook().
 *
 * Replace Drupal core's jquery.js with the new one from jQuery Update module.
 */

// function bedes_theme_page_preprocess_page(&$variables)
// {
//   // Only do this for pages that have JavaScript on them.
//   if (!empty($variables['scripts'])) {
//   	drupal_add_js('js/jquery.min.js', 'theme');
//   }
// }

// function bedes_page_preprocess_page(&$variables) {
//   // Only do this for pages that have JavaScript on them.
//   if (!empty($variables['scripts'])) {

//     // Perform the logic if either jQuery Update's jquery.js is newer than core's.
//     if (variable_get('jquery_update_replace', TRUE)) {
//       // Get an array of all the JavaScript files loaded by Drupal on this page.
//       $scripts = drupal_add_js();

//       // Replace jquery.js first.
//       $new_jquery = array(bedes_update_jquery_path() => $scripts['core']['misc/jquery.js']);
//       $scripts['core'] = array_merge($new_jquery, $scripts['core']);
//       unset($scripts['core']['misc/jquery.js']);

//       // Loop through each of the required replacements.
//       foreach (jquery_update_get_replacements() as $type => $replacements) {
//         foreach ($replacements as $find => $replace) {
//           // If the file to replace is loaded on this page...
//           if (isset($scripts[$type][$find])) {
//             // Create a new entry for the replacement file, and unset the original one.
//             $replace = JQUERY_UPDATE_REPLACE_PATH .'/'. $replace;
//             $scripts[$type][$replace] = $scripts[$type][$find];
//             unset($scripts[$type][$find]);
//           }
//         }
//       }

//       $variables['scripts'] = drupal_get_js('header', $scripts);
//     }
//   }
// }

function bedes_menu_tree($tree,$class = 'menu'){
	return "<ul class=\"$class\">\n $tree </ul>";
}

/**
* Return a multidimensional array of links for a navigation menu.
*/
function bedes_navigation_links($menu_name, $level = 0) {
	// Don't even bother querying the menu table if no menu is specified.
	if (empty($menu_name)) {
		return array();
	}

	// Get the menu hierarchy for the current page.
	$tree_page = menu_tree_page_data($menu_name);
	// Also get the full menu hierarchy.
	$tree_all = menu_tree_all_data($menu_name);

	// Go down the active trail until the right level is reached.
	while ($level-- > 0 && $tree_page) {
		// Loop through the current level's items until we find one that is in trail.
		while ($item = array_shift($tree_page)) {
			if ($item['link']['in_active_trail']) {
				// If the item is in the active trail, we continue in the subtree.
				$tree_page = empty($item['below']) ? array() : $item['below'];
				break;
			}
		}
	}

	return bedes_navigation_links_level($tree_page, $tree_all);
}


/**
* Helper function for themename_navigation_links to recursively create an array of links.
* (Both trees are required in order to include every menu item and active trail info.)
*/
function bedes_navigation_links_level($tree_page, $tree_all) {
	$links = array();
	foreach ($tree_all as $key => $item) {
		$item_page = $tree_page[$key];
		$item_all = $tree_all[$key];
		if (!$item_all['link']['hidden']) {
			$class = '';
			$l = $item_all['link']['localized_options'];
			$l['href'] = $item_all['link']['href'];
			$l['title'] = $item_all['link']['title'];
			if ($item_page['link']['in_active_trail']) {
				$class = ' active-trail';
			}
			if ($item_all['below']) {
				$l['children'] = bedes_navigation_links_level($item_page['below'], $item_all['below']);
			}
			// Keyed with the unique mlid to generate classes in theme_links().
			$links['menu-'. $item_all['link']['mlid'] . $class] = $l;
		}
	}
	return $links;
}

/**
* Return a themed set of links. (Extended to support multidimensional arrays of links.) 
*/
function bedes_links($links, $attributes = array('class' => 'links')) {
	$output = '';

	if (count($links) > 0) {
		$output = '<ul'. drupal_attributes($attributes) .'>';

		$num_links = count($links);
		$i = 1;

		foreach ($links as $key => $link) {
		$class = $key;

		// Add first, last and active classes to the list of links to help out themers.
		if ($i == 1) {
			$class .= ' first';
		}
		if ($i == $num_links) {
			$class .= ' last';
		}
		if (isset($link['href']) && ($link['href'] == $_GET['q'] || ($link['href'] == '<front>' && drupal_is_front_page()))) {
			$class .= ' active';
		}
		// Added: if the link has child items, add a haschildren class
		if (isset($link['children'])) {
			$class .= ' haschildren';
		}
		$output .= '<li'. drupal_attributes(array('class' => $class)) .'>';

		if (isset($link['href'])) {
			// Pass in $link as $options, they share the same keys.
			$output .= l($link['title'], $link['href'], $link);
		}
		else if (!empty($link['title'])) {
			// Some links are actually not links, but we wrap these in <span> for adding title and class attributes
			if (empty($link['html'])) {
				$link['title'] = check_plain($link['title']);
			}
			$span_attributes = '';
			if (isset($link['attributes'])) {
				$span_attributes = drupal_attributes($link['attributes']);
			}
			$output .= '<span'. $span_attributes .'>'. $link['title'] .'</span>';
		}

		// Added: if the link has child items, print them out recursively
		if (isset($link['children'])) {
			$output .= "\n" . theme('links', $link['children'], array('class' =>'sublinks'));
		}

		$i++;
			$output .= "</li>\n";
		}

		$output .= '</ul>';
	}

	return $output;
}

/**
* generates markup for the primary links
*/
function bedes_primary_links() {
	return bedes_navigation_links(variable_get('menu_primary_links_source', 'primary-links'));
}