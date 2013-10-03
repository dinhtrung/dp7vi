<?php
/**
 * @file
 * Contains the theme's functions to manipulate Drupal's default markup.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728096
 */

function zenexp_breadcrumb($variables) {
	$breadcrumb = $variables ['breadcrumb'];
	$output = '';

	// Determine if we are to display the breadcrumb.

	array_shift ( $breadcrumb );

	// Return the breadcrumb with separators.
	if (! empty ( $breadcrumb )) {
		$trailing_separator = $title = '';
		$item = menu_get_item ();
		if (! empty ( $item ['tab_parent'] )) {
			// If we are on a non-default tab, use the tab's title.
			$breadcrumb [] = check_plain ( $item ['title'] );
		} else {
			$breadcrumb [] = drupal_get_title ();
		}

		// Provide a navigational heading to give context for breadcrumb links to
		// screen-reader users.
		if (empty ( $variables ['title'] )) {
			$variables ['title'] = t ( 'You are here' );
		}
		// Unless overridden by a preprocess function, make the heading invisible.
		if (! isset ( $variables ['title_attributes_array'] ['class'] )) {
			$variables ['title_attributes_array'] ['class'] [] = 'element-invisible';
		}

		// Build the breadcrumb trail.
		$output = '<nav class="breadcrumb" role="navigation">';
		$output .= '<h2' . drupal_attributes ( $variables ['title_attributes_array'] ) . '>' . $variables ['title'] . '</h2>';
		$output .= '<ol class="breadcrumb"><li>' . implode ( '</li><li>', $breadcrumb ) . $trailing_separator . '</li></ol>';
		$output .= '</nav>';
	}
	return $output;
}


/**
 * Returns HTML for a query pager.
 *
 * Menu callbacks that display paged query results should call theme('pager') to
 * retrieve a pager control so that users can view other results. Format a list
 * of nearby pages with additional query results.
 *
 * @param $variables
 *   An associative array containing:
 *   - tags: An array of labels for the controls in the pager.
 *   - element: An optional integer to distinguish between multiple pagers on
 *     one page.
 *   - parameters: An associative array of query string parameters to append to
 *     the pager links.
 *   - quantity: The number of pages in the list.
 *
 * @ingroup themeable
 * @see theme_pager
 */
function zenexp_pager($variables) {
  $tags = $variables['tags'];
  $element = $variables['element'];
  $parameters = $variables['parameters'];
  $quantity = $variables['quantity'];
  global $pager_page_array, $pager_total;

  // Calculate various markers within this pager piece:
  // Middle is used to "center" pages around the current page.
  $pager_middle = ceil($quantity / 2);
  // current is the page we are currently paged to
  $pager_current = $pager_page_array[$element] + 1;
  // first is the first page listed by this pager piece (re quantity)
  $pager_first = $pager_current - $pager_middle + 1;
  // last is the last page listed by this pager piece (re quantity)
  $pager_last = $pager_current + $quantity - $pager_middle;
  // max is the maximum page number
  $pager_max = $pager_total[$element];
  // End of marker calculations.

  // Prepare for generation loop.
  $i = $pager_first;
  if ($pager_last > $pager_max) {
    // Adjust "center" if at end of query.
    $i = $i + ($pager_max - $pager_last);
    $pager_last = $pager_max;
  }
  if ($i <= 0) {
    // Adjust "center" if at start of query.
    $pager_last = $pager_last + (1 - $i);
    $i = 1;
  }
  // End of generation loop preparation.

  $li_first = theme('pager_first', array('text' => (isset($tags[0]) ? $tags[0] : t('« first')), 'element' => $element, 'parameters' => $parameters));
  $li_previous = theme('pager_previous', array('text' => (isset($tags[1]) ? $tags[1] : t('‹ previous')), 'element' => $element, 'interval' => 1, 'parameters' => $parameters));
  $li_next = theme('pager_next', array('text' => (isset($tags[3]) ? $tags[3] : t('next ›')), 'element' => $element, 'interval' => 1, 'parameters' => $parameters));
  $li_last = theme('pager_last', array('text' => (isset($tags[4]) ? $tags[4] : t('last »')), 'element' => $element, 'parameters' => $parameters));

  if ($pager_total[$element] > 1) {
    if ($li_first) {
      $items[] = array(
        'class' => array('first'),
        'data' => $li_first,
      );
    }
    if ($li_previous) {
      $items[] = array(
        'class' => array('previous'),
        'data' => $li_previous,
      );
    }

    // When there is more than one page, create the pager list.
    if ($i != $pager_max) {
      if ($i > 1) {
        $items[] = array(
          'class' => array('disabled'),
          'data' => '<span>…</span>',
        );
      }
      // Now generate the actual pager piece.
      for (; $i <= $pager_last && $i <= $pager_max; $i++) {
        if ($i < $pager_current) {
          $items[] = array(
            'data' => theme('pager_previous', array('text' => $i, 'element' => $element, 'interval' => ($pager_current - $i), 'parameters' => $parameters)),
          );
        }
        if ($i == $pager_current) {
          $items[] = array(
            'class' => array('active'),
            'data' => "<span>$i</span>",
          );
        }
        if ($i > $pager_current) {
          $items[] = array(
            
            'data' => theme('pager_next', array('text' => $i, 'element' => $element, 'interval' => ($i - $pager_current), 'parameters' => $parameters)),
          );
        }
      }
      if ($i < $pager_max) {
        $items[] = array(
          'class' => array('disabled'),
          'data' => '<span>…</span>',
        );
      }
    }
    // End generation.
    if ($li_next) {
      $items[] = array(
        'class' => array('pager-next'),
        'data' => $li_next,
      );
    }
    if ($li_last) {
      $items[] = array(
        'class' => array('last'),
        'data' => $li_last,
      );
    }
    return '<h2 class="element-invisible">' . t('Pages') . '</h2>' . '<div class="clearfix text-center">' . theme('item_list', array(
      'items' => $items,
      'class' => array('center'),
      'attributes' => array('class' => array('pagination')),
    )) . '</div>';
  }
}


/**
* Render the pager_mini in views as a pager, not a pagination.
* ← Previous    																			Next →


**/
function zenexp_views_mini_pager($vars) {
  global $pager_page_array, $pager_total;

  $tags = $vars['tags'];
  $element = $vars['element'];
  $parameters = $vars['parameters'];

  // current is the page we are currently paged to
  $pager_current = $pager_page_array[$element] + 1;
  // max is the maximum page number
  $pager_max = $pager_total[$element];
  // End of marker calculations.

  if ($pager_total[$element] > 1) {

    $li_previous = theme('pager_previous',
      array(
        'text' => ($text = (isset($tags[1]) ? $tags[1] : t('←'))),
        'element' => $element,
        'interval' => 1,
        'parameters' => $parameters,
      )
    );
    if (empty($li_previous)) {
      $items[] = array(
		    'class' => array('previous disabled'),
		    'data' => "<span>$text</span>",
		  );
    } else {
      $items[] = array(
		    'class' => array('previous'),
		    'data' => $li_previous,
		  );
    }

    $li_next = theme('pager_next',
      array(
        'text' => ($text = (isset($tags[3]) ? $tags[3] : t('→'))),
        'element' => $element,
        'interval' => 1,
        'parameters' => $parameters,
      )
    );

    $items[] = array(
      'class' => array('active'),
      'data' => '<span>' . t('@current / @max', array('@current' => $pager_current, '@max' => $pager_max)) . '</span>',
    );

    if (empty($li_next)) {
      $items[] = array(
		    'class' => array('next disabled'),
		    'data' => "<span>$text</span>",
		  );
    } else {
      $items[] = array(
		    'class' => array('next'),
		    'data' => $li_next,
		  );
    }
    
    return '<div class="text-center clearfix">' . theme('item_list',
      array(
        'items' => $items,
        'title' => NULL,
        'type' => 'ul',
        'attributes' => array('class' => array('pager')),
      )
    ) . '</div>';
  }
}


/* Taken from Tweme. Dont know why it not work... 
function phptemplate_item_list($vars) {
  if (isset($vars['attributes']['class']) && in_array('pager', $vars['attributes']['class'])) {
    unset($vars['attributes']['class']);
    foreach ($vars['items'] as $i => &$item) {
      if (in_array('pager-current', $item['class'])) {
        $item['class'] = array('active');
        $item['data'] = '<a href="#">' . $item['data'] . '</a>';
      }
      elseif (in_array('pager-ellipsis', $item['class'])) {
        $item['class'] = array('disabled');
        $item['data'] = '<a href="#">' . $item['data'] . '</a>';
      }
    }
    return '<div class="pagination pagination-centered">' . theme_item_list($vars) . '</div>';
  }
  return theme_item_list($vars);
}

*/
