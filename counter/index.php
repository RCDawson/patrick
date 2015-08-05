<?php
define('ga_email','ryan@cdadv.com');
define('ga_password','jomama01');
define('ga_profile_id','40163862');

require 'gapi.class.php';

$ga = new gapi(ga_email,ga_password);

$ga->requestReportData(ga_profile_id,array('year'),array('visitors'),"year", null, "2010-12-16"); // Analytics started 12-16-2010
?>
<html>
<head>
<style>
table { border-collapse:collapse; }
th, td { text-align:left; border:1px dotted gray; padding:4px; }
</style>
</head>
<body>
	<table width="500">
		<tr>
		  <th>Year</th>
		  <th>New Visits</th>
		  <th>Total Visits</th>
		  <th>Total Page Views</th>
		</tr>
<?php foreach($ga->getResults() as $result): ?>
		<tr>
		  <td><?php echo $result->getYear() ?></td>
		  <td><?php echo $result->getVisitors() ?></td>
		</tr>
<?php endforeach ?>
		</table>
		
		<table>
		<tr>
		  <th>Rows Returned</th>
		  <td><?php echo $ga->getTotalResults() ?></td>
		</tr>
		<tr>
		</tr>
		<tr>
		  <th>Total Visits</th>
		  <td><?php echo $ga->getVisitors() ?></td>
		</tr>
		<tr>
		</tr>
		<tr>
		  <th>Results Updated</th>
		  <td><?php echo $ga->getUpdated() ?></td>
		</tr>
		<tr>
			<th>Data Range: </th><td><?php echo $ga->getstartDate() ?> to <?php echo $ga->getendDate() ?></td>
		</tr>
	</table>
</body>
</html>