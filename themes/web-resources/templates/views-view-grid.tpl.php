<?php

/**
 * @file
 * Default simple view template to display a rows in a grid.
 *
 * - $rows contains a nested array of rows. Each row contains an array of
 *   columns.
 *
 * @ingroup views_templates
 */

 $col = 'col-' . $options['columns'];
 switch ($options['columns']){
 	case 4:
 		$col = 'col-md-3 col-xs-6';
 		break;
 	case 3:
 		$col = 'col-sm-4';
 		break;
 	case 2:
 		$col = 'col-xs-6';
 		break;
 	case 6:
 		$col = 'col-sm-2';
 		break;
 	case 12:
 		$col = 'col-sm-1';
 		break;
 }
?>
<?php if (!empty($title)) : ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<div class="<?php print $class; ?>"<?php print $attributes; ?>>
  <?php if (!empty($caption)) : ?>
    <p class="lead"><?php print $caption; ?></p>
  <?php endif; ?>

    <?php foreach ($rows as $row_number => $columns): ?>
      <div class="row">
      	<div <?php if ($row_classes[$row_number]) { print 'class="' . $row_classes[$row_number] .'"';  } ?>>
	        <?php foreach ($columns as $column_number => $item): ?>
	          <div class="<?php print $col; ?>">
		          <div <?php if ($column_classes[$row_number][$column_number]) { print 'class="' . $column_classes[$row_number][$column_number] .'"';  } ?>>
		            <?php print $item; ?>
		          </div>
	          </div>
	        <?php endforeach; ?>
	      </div>
      </div>
    <?php endforeach; ?>
</div>
