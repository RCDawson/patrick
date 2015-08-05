<?php
define('ga_email','patrick.engineering@gmail.com');
define('ga_password','patrick2010');
define('ga_profile_id','40163862');

require 'gapi.class.php';

$ga = new gapi(ga_email,ga_password);

$ga->requestReportData(ga_profile_id,array('year'),array('visits', 'newvisits'),"year", null, "2010-01-01");
?>
<html>
<head>
<style>
table { border-collapse:collapse; }
th, td { text-align:left; border:1px dotted gray; padding:4px; }
td { padding-left:12px; }
</style>
</head>
<body>
	<table>
		<tr>
		  <th>Year</th>
		  <th>New Visits</th>
		</tr>
<?php foreach($ga->getResults() as $result): ?>
		<tr>
		  <td><?php echo $result->getYear() ?></td>
		  <td><?php echo $result->getNewVisits() ?></td>
		</tr>
<?php endforeach ?>
<!-- 
		<tr>
		  <th>Rows Returned</th>
		  <td><?php echo $ga->getTotalResults() ?></td>
		</tr>
 -->
		<tr>
		  <th>Total Visits</th>
		  <td><?php echo $ga->getNewVisits() ?></td>
		</tr>
		<tr>
		  <th>Information Last Updated</th>
		  <td><?php echo $ga->getUpdated() ?></td>
		</tr>
<!-- 
		<tr>
			<th>Data Range: </th><td><?php echo $ga->getstartDate() ?> to <?php echo $ga->getendDate() ?></td>
		</tr>
 -->
		<tr>
			<td colspan="2" style="font-size: small"><em>Visits are determined by unique IP addresses per time frame selected (January 1 to December 31).</em></td>
		</tr>
	</table>
</body>
</html>