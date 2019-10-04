<!DOCTYPE html>
<html lang="en">
<head>
  <title>Input Student's Information</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				Input Student's Information
			</div>
			<div class="panel-body">
				<form method="post" action="{{route('post-student')}}">
					{{csrf_field()}}
					<div class="form-group">
						<label for="fullname">Fullname</label>
						<input id="fullname" type="text" required name="fullname" class="form-control">
					</div>	
					<div class="form-group">
						<label for="age">Age</label>
						<input id="age" type="text" required name="age" class="form-control">
					</div>
					<div class="form-group">
						<label for="address">Address</label>
						<input id="address" type="text" required name="address" class="form-control">
					</div>
					<button class="btn btn-success">Register</button>
				</form>				
			</div>

		</div>
	</div>
</body>
</html>