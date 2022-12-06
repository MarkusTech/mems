<!doctype html public "-//w3c//dtd html 3.2//en">
<html>
<head>
<title>Summary of Incidents In General Santos City</title>
</head>
<body >
<?Php
require "config.php";// Database connection

if($stmt = $connection->query("SELECT month,fire,flood,landslide,vehicular,bigwaves FROM chart_data_line")){
 
   "No of records : ".$stmt->num_rows."<br>";
$php_data_array = Array(); // create PHP array
   "<table>
<tr> <th>Month</th><th>fire</th><th>flood</th><th>landslide</th><th>vehicular</th><th>bigwaves</th></tr>";
while ($row = $stmt->fetch_row()) {
    "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td></tr>";
   $php_data_array[] = $row; // Adding to array
   }
 "</table>";
}else{
echo $connection->error;
}
//print_r( $php_data_array);
// You can display the json_encode output here. 
 json_encode($php_data_array); 

// Transfor PHP array to JavaScript two dimensional array 
echo "<script>
        var my_2d = ".json_encode($php_data_array)."
</script>";
?>


<div id="curve_chart"></div>
<br><br>


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {packages: ['corechart']});
      google.charts.setOnLoadCallback(drawChart);
	  
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Month');
        data.addColumn('number', 'Fire');
		data.addColumn('number', 'Flood');
		data.addColumn('number', 'Landslide');
		data.addColumn('number', 'Vehicular');
    data.addColumn('number', 'Bigwaves');
   
    
        for(i = 0; i < my_2d.length; i++)
    data.addRow([my_2d[i][0], parseInt(my_2d[i][1]),parseInt(my_2d[i][2]),parseInt(my_2d[i][3]),parseInt(my_2d[i][4]),parseInt(my_2d[i][5])]);
       var options = {
          title: 'Summary of Incidents in General Santos City',
        curveType: 'function',
		width: 1500,
        height: 600,
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
        chart.draw(data, options);
       }
	///////////////////////////////
</script>
</body></html>







