<?php

$users = array( 
   array('first_name' => 'Michael', 'last_name' => 'Choi '),
   array('first_name' => 'John', 'last_name' => 'Supsupin'),
   array('first_name' => 'Mark', 'last_name' => ' Guillen'),
   array('first_name' => 'KB', 'last_name' => 'Tonel'), 
   array('first_name' => 'Laura', 'last_name' => 'Ashley'),
   array('first_name' => 'Rebecca', 'last_name' => 'Tseng'),
   array('first_name' => 'Joseph', 'last_name' => 'Tai'),
   array('first_name' => 'Roya', 'last_name'=>'Ginsberg'),
   array('first_name' => 'Lydia', 'last_name' => 'Chang'),
   array('first_name' => 'Linneth', 'last_name' => 'Chou'),
   array('first_name' => 'Benjamin', 'last_name' => 'Mao')
);
echo "<table>
	<tr>
		<th>User_number</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Full Name</th>
		<th>Full Name in uppercase</th>
		<th>Length of Name</th>
	</tr><tbody>";
	$i=1;
foreach($users as $user){
	if ($i%5==0)
	{
		echo "<tr style='background:black; color:white;'>";
	}
	else
	{
		echo "<tr>";
	}
	echo "<td>". $i."</td>";
	echo "<td>".$user[$i]['first_name']."</td>";
	echo "<td>".$user[$i]['last_name']."</td>";
	echo "<td>".$user[$i]['first_name']." ".$user['last_name']."</td>";
	echo "<td>".strtoupper($user[$i]['first_name'])." ".strtoupper($user[$i]['last_name'])."</td>";
	echo "<td>".strlen($user[$i]['first_name']." ".$user[$i]['last_name'])."</td>";
	echo "</tr>";
	$i++;
	/*echo if i%5==0 {css:background:black color:white};*/

}
echo "</tbody></table>";
?>