<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php 
foreach ($rows as $id => $row): 
	print $row; 
endforeach; 
?>
