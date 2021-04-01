@extends('layouts.admin')

@section('content')

<script type="text/javascript">
   var analytics = <?php echo $status; ?>

   google.charts.load('current', {'packages':['corechart']});

   google.charts.setOnLoadCallback(drawChart);

   function drawChart()
   {
    var data = google.visualization.arrayToDataTable(analytics);
    var options = {
     title : 'Summary of Contracts',
     pieHole: 0.5
    };
    var chart = new google.visualization.PieChart(document.getElementById('pie_chart'));
    chart.draw(data, options);
   }
  </script>


<div class="container">
    <div class="card">
        <div class="row justify-content-center">
            <div class="container-fluid">
                <div class="card-body">
   
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        
                        </div>
                        <div class="panel-body" align="center">
                        <div id="pie_chart" style="width:auto; height:450px;">

                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
