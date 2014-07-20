<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Eloquent Model Relationship</title>

	{{ HTML::style('bootstrap.min.css') }}
</head>
<body>
	<div class="container">

		<!-- Boys and his girl Friend -->
		<div class="col-md-4">
			<h1 class="lead"> Boys and his girl friend </h1>
			<table class="table">
				@foreach ($boys as $boy)
					<tr> 
						<td>{{ $boy->name }}</td>
						<td> = </td>
						<td> {{ $boy->girl_friend->name }} </td>
					</tr>
				@endforeach
			</table>
		</div>

		<div class="col-md-8">
			<h1 class="lead"> Boys and his loveletters </h1>
			<table class="table">
				<thead>
				
					<th>Name</th>
					<th></th>
					<th>Love Letter 1</th>
					<th>Love Letter 2</th>
				</thead>
				@foreach ($boys as $boy)
					<tr> 
						<td>{{ $boy->name }}</td>
						<td> = </td>
						@foreach ($boy->love_letter as $loveLetter)
							<td>{{ $loveLetter->content }}</td>
						@endforeach
					</tr>
				@endforeach
			</table>
		</div>

		<div class="col-md-12">
			<h1 class="lead"> Girls </h1>
			<table class="table">
				
				@foreach ($boys as $boy)
					<tr> 
						<td>{{ $boy->name }}</td>
						<td> = </td>
						@foreach ($boy->girl as $girl)
							<td>{{ $girl->name }}</td>
						@endforeach
					</tr>
				@endforeach
			</table>
		</div>
	</div>
</body>
</html>