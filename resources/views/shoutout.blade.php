<h1>{{$text}}</h1>


@if($text = "gwapo")
	<h1>Gwapo</h1>

@elseif($text == "gwapa")
	<h1>Gwapa</h1>

@endif
<table border = "100">
	<th>#</th>
	<th>COLOR</th>
	<th>DESCRIPTION</th>

@foreach($colors as $color => $description)
	

		<tr>
				<td>{{$loop->iteration}}</td>
				<td>{{ $color}}</td>
				<td>{{ $description }}</td>
		</tr>
	 

	<br>
@endforeach