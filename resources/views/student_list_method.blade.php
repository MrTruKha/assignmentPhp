<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student list</title>
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
				Management Student's 
			</div>
			<div class="panel-body">
				<table class="table table-bordered">
					<tr>
						<th width="30px">No</th>
						<th>FullName</th>
						<th>Age</th>
						<th>Address</th>
						<th width="60px"></th>
					</tr>
					@php
						$count=1;
					@endphp
					@foreach ($studentList as $item)
						<tr>
							<td>{{$count++}}</td>
							<td>{{$item['fullname']}}</td>
							<td>{{$item['age']}}</td>
							<td>{{$item['address']}}</td>
							<td><button class="btn btn-primary">Delete</button></td>
						</tr>
					@endforeach				
				</table>				
			</div>

		</div>
	</div>
</body>
</html>