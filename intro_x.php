

<?php
	$users['first_name'] = "Michael";
	$users['last_name'] = "Choi";

	function html_output($arr)
	{
		$table_header = "";
		$result_row = "";

		foreach ($arr as $key => $value)
		{
			$table_header .= $key . " ";
			$result_row .= "<tr>
								<td> The value in the key " . $key. "is" . $value. "</td>
								</tr>";
		}
		$result = "<table>
					<theader>
						<th> There are two keys in this array: " . $table_header . "</th>
							</theader>
							<tbody>
							". $result_row ."
							</tbody>
							</table>";
		return $result;
	}

	echo html_output($users);
?>


