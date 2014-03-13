<html>
  <head>
     <script src="http://code.jquery.com/jquery-latest.js"></script>
	    <script src="../highcharts/js/highcharts.js" type="text/javascript"></script>

   </head>
<?php
print "<script>
function getX(time){
	var x = ".$_GET['V']."*Math.cos(Math.PI/180*".$_GET['alpha'].")*time;
	return(x);
}
function getY(time){
	var y = ".$_GET['V']."*Math.sin(Math.PI/180*".$_GET['alpha'].")*time-9.81*time*time/2;
	return(y);
}
var chart; // globally available
$(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: 'container',
                type: 'line',
                marginRight: 130,
                marginBottom: 25
            },
            title: {
                text: 'Bounty Hunter result',
                x: -20 //center
            },
            yAxis: {
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },
            tooltip: {
                formatter: function() {
                        return '<b>'+ this.series.name +'</b><br/>'+
                        this.x +': '+ this.y;
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'top',
                x: -10,
                y: 100,
                borderWidth: 0
            },
            series: [{
                name: 'Bounty Hunter',
                data: [[getX(0), getY(0)],[getX(0.2), getY(0.2)],[getX(0.4), getY(0.4)],[getX(0.6), getY(0.6)],[getX(0.8), getY(0.8)],[getX(1), getY(1)],[getX(1.2), getY(1.2)],[getX(1.4), getY(1.4)],[getX(1.6), getY(1.6)],[getX(1.8), getY(1.8)],[getX(2), getY(2)],[getX(2.2), getY(2.2)],[getX(2.4), getY(2.4)],[getX(2.6), getY(2.6)] ]
            }]
        });
    });
</script>
<div id='container' style='width: 100%; height: 100%'></div>
";
?>