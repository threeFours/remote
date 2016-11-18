<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Remote</title>
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="css/main.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	
  </head>

<body>
<div class="text-center">

<nav>
	<ul class="pagination pagination-lg">
		<li class="active">
			<a href="index.php">Remote</a>
		</li>
		<li>
			<a href="channels.php">Channels</a>
		</li>
	</ul>
</nav>
			

<button id="tvpower" type="button" class="btn btn-lg btn-success">TV <span class="glyphicon glyphicon-off" aria-hidden="true"></span></button>
<button id="refresh" type="button" class="btn btn-lg">Refresh Rate</button>
<button id="sourcecable" type="button" class="btn btn-lg">Cable</button>
<button id="sourcehtpc" type="button" class="btn btn-lg">HTPC</button>
<br /><br />
<button id="GUIDE" type="button" class="btn btn-lg">Guide</button>
<button id="LIVETV" type="button" class="btn btn-lg">Live TV</button>
<button id="ENTER" type="button" class="btn btn-lg">Last Channel</button>
<br /><br />
<button id="bulls" type="button" class="btn btn-lg btn-danger">Bulls</button>
<button id="bears" type="button" class="btn btn-lg btn-primary">Bears</button>
<button id="blackhawks" type="button" class="btn btn-lg btn-danger">Blackhawks</button>
<br /><br />
<div class="btn-group btn-group-justified">
<div class="btn-group">
<button id="CHANNELUP" type="button" class="btn btn-lg"><span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span> Channel/Page</button>
</div>
<div class="btn-group">
<button id="CHANNELDOWN" type="button" class="btn btn-lg"><span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span> Channel/Page</button>
</div></div>
<br />
<div class="btn-group btn-group-justified">
<div class="btn-group">
<button id="mute" type="button" class="btn btn-lg"><span class="glyphicon glyphicon-volume-off" aria-hidden="true"></span></button>
</div>
<div class="btn-group">
<button id="volumedown" type="button" class="btn btn-lg"><span class="glyphicon glyphicon-volume-down" aria-hidden="true"></span></button>
</div>
<div class="btn-group">
<button id="volumeup" type="button" class="btn btn-lg"><span class="glyphicon glyphicon-volume-up" aria-hidden="true"></span></button>
</div></div>
<br />
<button id="UP" type="button" class="btn btn-lg"><span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span></button>
<button id="DOWN" type="button" class="btn btn-lg"><span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span></button></br >
<button id="LEFT" type="button" class="btn btn-lg"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span></button>
<button id="RIGHT" type="button" class="btn btn-lg"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></button>
<br /><br />
<button id="SELECT" type="button" class="btn btn-lg">Select</button>
<button id="EXIT" type="button" class="btn btn-lg">Back</button>
</div>
</body>

<script>

$('.btn').click(function(){
	var btnVal = this.id;
	var url = 'run.php';
	$.ajax({
		method: "POST",
		url: "run.php",
		data: { button: btnVal }
	})
})

$('.list-group-item').click(function(){
        var btnVal = this.id;
        var url = 'run.php';
        $.ajax({
                method: "POST",
                url: "run.php",
                data: { button: btnVal }
        })
})

</script>
