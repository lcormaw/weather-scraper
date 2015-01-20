<!DOCTYPE html>
<html>
    <head>
        <title>Weather Scraper</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
		
		<!-- Custom styles -->
		<link rel="stylesheet" href="css/styles.css">
		
		<!-- Import fonts -->
		<link href='http://fonts.googleapis.com/css?family=Cabin:400,700' rel='stylesheet' type='text/css'>
    </head>

    <body>
    	<div class="container">
		
			<div class="row text-center">
			
				<div id="search" class="col-sm-6 col-sm-offset-3">
					
					<h1>3-day Weather Forecast</h1>
					
					<p class="lead">Enter your city below to get a forecast for the weather.</p>
					
					<form>
					
						<div class="form-group">
							<input type="text" id="city" class="form-control" name="city" placeholder="London, Paris, San Francisco...">
						</div>
						
						<button id="findWeather" class="btn btn-success btn-lg">Find My Weather</button>
						
					</form>
					
					<div id="success" class="alert alert-success"></div>
					
					<div id="fail" class="alert alert-danger">Could not find the weather data for that city. Please try again.</div>
					
					<div id="noCity" class="alert alert-danger">Please enter a city.</div>
					
				</div><!-- search -->
				
			</div><!-- row -->
			
		</div><!-- container -->
		
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
		
		<!-- jQuery -->
		<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
		
		<script>
		
			$("#findWeather").click(function(event) {
				
				event.preventDefault();
				
				$(".alert").hide();
				
				if ($("#city").val() != "") {
					
					$.get("scraper.php?city="+$("#city").val(), function(data) {
												
						if(data=="") {
						
							$("#fail").fadeIn();
						
						} else {
						
							$("#success").html(data).fadeIn();
						
						}
					});
					
				} else {
				
					$("#noCity").fadeIn();
				
				} 
								
			});
		
		</script>
    </body>
</html>