<!DOCTYPE HTML>
<html>
<head>
    <script>
        window.onload = function() {

            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                title: {
                    text: "Which app is your favorite ?"
                },
                data: [{
                    type: "pie",
                    startAngle: 240,
                    yValueFormatString: "##0 votes",
                    indexLabel: "{label} {y}",
                    dataPoints: [
                            @foreach($data as $i)
                        {y:{{$i->votes}}, label:"{{$i->app}}"},
                    @endforeach
                    ]
                }]
            });
            chart.render();

        }
    </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<title>Pie Chart</title>
</head>
<body>
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            {{Form::open(array('url'=>'/chart/input'))}}
            {{Form::token()}}
            {{Form::label('Which app is your favorite ?')}}<br>
            {{Form::radio('app','Google')}}Google<br>
            {{Form::radio('app','Youtube')}}Youtube<br>
            {{Form::radio('app','Instagram')}}Instagram<br>
            {{Form::radio('app','Facebook')}}Facebook<br>
            {{Form::radio('app','Dcard')}}Dcard<br>
            {{Form::radio('app','others')}}others<br>
            {{Form::submit('sent')}}
            {{Form::close()}}
        </div>
        <div class="col">
            @foreach($data as $i)
                {y:{{$i->votes}}, label:"{{$i->app}}"},<br>
            @endforeach
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>