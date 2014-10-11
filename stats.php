<?php
mysql_connect("mysql9.mylogin.ie", "samcoganme", "88homeless88") or die (mysql_error());

mysql_select_db("RG293604_homeless") or die(mysql_error());
/*$chart = mysql_query("SELECT COUNT(name) FROM c") or die(mysql_error());
$row = mysql_fetch_row($chart);
$bchart = mysql_query("SELECT COUNT(name) FROM bchart") or die(mysql_error());
$row1 = mysql_fetch_row($bchart);
$volunteer = mysql_query("SELECT COUNT(name) FROM volunteer") or die(mysql_error());
$row2 = mysql_fetch_row($volunteer);*/
$count = mysql_query("SELECT COUNT(id) FROM reports where date='2014-10-10'") or die(mysql_error());
$countTotal = mysql_query("SELECT COUNT(id) FROM reports") or die(mysql_error());


$countDisplay = mysql_fetch_row($count);
$CD = $countDisplay[0];

$countTotalDisplay = mysql_fetch_row($countTotal);
$CTD = $countTotalDisplay[0];

?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Stats</title>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript">
$(function () {
    $('#sex').highcharts({
        chart: {
            type: 'pie',
            options3d: {
				enabled: true,
                alpha: 45,
                beta: 0
            }
        },
        title: {
            text: 'Male v Female'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                depth: 35,
                dataLabels: {
                    enabled: true,
                    format: '{point.name}'
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Gender balance',
            data: [
                ['Male',   3],
                ['Female',       3]
            ]
        }]
    });
});
		</script>
		
		<script type="text/javascript">
$(function () {
    $('#routes').highcharts({
        chart: {
            type: 'pie',
            options3d: {
				enabled: true,
                alpha: 45,
                beta: 0
            }
        },
        title: {
            text: 'Routes'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                depth: 35,
                dataLabels: {
                    enabled: true,
                    format: '{point.name}'
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Routes',
            data: [
                ['South Dublin',   7],
                ['North Dublin',       14]
            ]
        }]
    });
});
		</script>
	</head>
	<body>
<script src="jsN/highcharts.js"></script>
<script src="jsN/highcharts-3d.js"></script>
<script src="jsN/modules/exporting.js"></script>
<!--
<form name="volunteer" action="donate.php" method="post" id="volunteer_form">
 <input type="text" id="fname" name="fname" placeholder="First Name:" class="input_field"><br/>
 <input type="text" id="lname" name="lname" placeholder="Second name:" class="input_field"><br/>
 <input type="text" id="num" name="num" placeholder="Phone number:" class="input_field"><br/>
 <input type="text" id="email" name="email" placeholder="Email" class="input_field"><br/>
<div class="form_inner_container">
<input type="radio" name="addy" value="IRL"><span class="white">Ireland</span><br/>
 <input type="radio" name="addy" value="NZ"><span class="white">New Zealand</span><br/>
 <input type="radio" name="addy" value="ENG"><span class="white">England</span><br/>
 <input type="radio" name="addy" value="OZ"><span class="white">Australia</span><br/>
 <input type="radio" name="addy" value="OTHER"><span class="white">Other</span><br/>
 <br/>
 <input type="submit" value="submit" class="button_left hover">
 <input type="reset" value="reset" class="button_right hover">
 </div>
 -->
Total counted today: <?php echo $CD ?><br />
Total counted all time: <?php echo $CTD ?>

 
 </form>
<div id="sex" style="height: 400px"></div>
<div id="routes" style="height: 400px"></div>
	</body>
</html>
