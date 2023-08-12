<?php
add_filter(	'qcformbuilder_forms_process_field_filtered_select2', 'qcformbuilder_forms_select2_populate_array' );
/**
 * Populate entry options for select2 field
 *
 * @since @todo
 *
 * @uses qcformbuilder_forms_process_field_filtered_select2
 *
 * @param array $entry
 *
 * @return array
 */
function qcformbuilder_forms_select2_populate_array( $entry ){
	
	if( !is_array( $entry ) ){
		return $entry;
	}

	$new_entry = array();
	foreach( $entry as $value ){
		$new_entry[$value] = $value;
	}

	return $new_entry;

}
