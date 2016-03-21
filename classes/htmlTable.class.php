<?php
class htmlTable {
	
	public function _construct($TableData);
	
	$keys = array_keys($TableData);
	
	$tableHtml = '<table cellspacing= "15"><tr>';
	
	$tableHtml .=  '
	<tr>
	<th>Make</th>
	<th>Model</th>
	<th>Year</th>
	<th>ID</th>
	<th>Action</th>
	</tr>';
	
	$tableHtml .= '</tr>';
	
	foreach ($TableData as $record) {
		$tableHtml .= '<tr>';
		
		foreach($record as $field => $value) {
			$tableHtml .= '<td>' . $value . '</tr>';
		}
		$akey = end($keys);
		$tableHtml .= '
		<td>
		<form action="index.php?controller=viewController" method="post">
		<fieldset>
		<input type="hidden" name="ID" value="' . $akey . '">
		<input type="submit" name="mode" value="View">
		<input type="hidden" name="ID" value="' . $akey . '">
				<input type="submit" name="mode" value="Edit">
		</fieldset>
		</form>
		</td>';
		$tableHtml .= '</tr>';
		

		
	}
	echo $tableHtml
}