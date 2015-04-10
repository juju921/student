<html>
	<head>
		<title>Laravel</title>

		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #000000;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
			}


		</style>
	</head>
	<body>
		<div class="container">
			<div class="content">
			<ul>
			@foreach($student as $student)
	            <li>{{$student['name']}}</li>

</ul>
			@endforeach
			</div>
		</div>
	</body>
</html>
