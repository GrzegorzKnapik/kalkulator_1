<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<script type="text/javascript" src="js\timer.js"></script>
</head>
<body onload = "odliczanie();">


<div id="zegar"></div>
</body>
</html>

Kaki
<link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css" integrity="sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD" crossorigin="anonymous">

<form class="pure-form pure-form-stacked" action="{{route('calc')}}" method="POST">
@csrf
	<fieldset>
	<!--kwota to nasza zmienna-->
	<label for="value">Kwota kredytu</label>	
	<input id="value" type="text" placeholder="kwota" name ="value" 
	value="@if(isset($value))
		{{$value}}
	@endif"/>PLN
	
	
	<!--value jest potrzebne do zapisania -->
	
	
	<label for="time">Okres spłaty</label>
	<input id="time" type="range" min="3" max="48" name="time" 
	value="@if(isset($time))
		{{$time}}
	@endif";
    oninput="nextElementSibling.value = value"/>
	<output>@if(isset($time))
		{{$time}}
	@endif</output> miesiące
		
	
	
	
	<label for="precent">Wysokość oprocentownia</label>
	<input id="precent" type="text" placeholder="oprocentowanie" name ="precent" 
	value="@if(isset($precent))
		{{$precent}}
	@endif" />%


	<input type="submit" value="Oblicz" class="pure-button"/> 
		</fieldset>
	</form>

	@if($errors->any())
	<div class="w-4/8 m-auto text-center">
		@foreach ($errors->all() as $error)
		<li class="text-red-500 list-none">
			{{$error}}
</li>
@endforeach
</div>
	@endif
	
	@if(isset($result))
		Wynik:{{$result}}
	@endif

	
	
		

