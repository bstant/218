<?php
class htmlTable {
	
	public function _construct($TableData);
	{
	
	$keys = array_keys($TableData);
	
	$Table = '<table border='2' style='background=color:blue;1px solid black;><tr>';
	
	$Table .=  '
	<tr>
	<th>Make</th>
	<th>Model</th>
	<th>Year</th>
	<th>ID</th>
	<th>Others</th>
	</tr>';
	
	$Table .= '</tr>';
	
	foreach ($TableData as $Item) {
		$Table .= '<tr>';
		
		foreach($Item as $head => $value) {
			$Table .= '<td>' . $value . '</tr>';
		}
		$key1 = end($keys);
		$Table .= '
		<td>
		<form action="index.php?controller=viewController" method="post">
		<fieldset>
		<input type="hidden" name="ID" value="' . $key1 . '">
		<input type="submit" name="mode" value="View">
		<input type="hidden" name="ID" value="' . $key1 . '">
				<input type="submit" name="mode" value="Edit">
		</fieldset>
		</form>
		</td>';
		$Table .= '</tr>';
		

		
	}
	echo $Table
}
}