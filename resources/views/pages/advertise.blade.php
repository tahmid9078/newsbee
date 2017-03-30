@extends('main')

@section('title' , '| Add advertise')


@section("scripts")

<style>
	

	#options, #table
	{
		display: none;
	}
</style>


<script>

	$(function(){
		$("#yes").change(function(){
			var check = $(this).checked;
			if(!check)
			{
				$("#options").show();
				$("#table").show();
			}
			else
			{
				$("#table").hide();
				$("#options").hide();
			}
		});


			$("#no").change(function(){
				var check = $(this).checked;
				if(!check)
				{
					$("#table").hide();
					$("#options").hide();
				}
				else
				{
					$("#table").show();
					$("#options").show();
				}
			});


			$(".cat").change(function(){
			var value = $(this).val();
			var fb30 = 0;
			var fb40 = 0;
			var fb50 = 0;
			var fb60 = 0;
			var fb70 = 0;
			
			var hb30 = 0;
			var hb40 = 0;
			var hb50 = 0;
			var hb60 = 0;
			var hb70 = 0;
			

			var wb30 = 0;
			var wb40 = 0;
			var wb50 = 0;
			var wb60 = 0;
			var wb70 = 0;
			
			console.log("herllo");
			$.get( "api/facebook/" + value, function( data ) {
			  	
				var dt = $.parseJSON(data);
				console.log(dt[0]);				
				fb30 = dt[0].age2030;
				fb40 = dt[0].age3140;
				fb50 = dt[0].age4150;
				fb60 = dt[0].age5160;
				fb70 = dt[0].age6170;
				

				$.get( "api/web/" + value, function( data ) {
			  		
			  		dt = $.parseJSON(data);
					wb30 = dt[0].age2030;
					wb40 = dt[0].age3140;
					wb50 = dt[0].age4150;
					wb60 = dt[0].age5160;
					wb70 = dt[0].age6170;
					
			  		$.get( "api/hard/" + value, function( data ) {
			  
			  			dt = $.parseJSON(data);
						hb30 = dt[0].age2030;
						hb40 = dt[0].age3140;
						hb50 = dt[0].age4150;
						hb60 = dt[0].age5160;
						hb70 = dt[0].age6170;
						

						var fb1 = (fb30/(fb30+wb30+hb30)) * 100;
						var wb1 = (wb30/(fb30+wb30+hb30)) * 100;
						var hb1 = (hb30/(fb30+wb30+hb30)) * 100;
						console.log("hello at final " + fb30);
						$("#fb20").html(parseFloat(fb1).toFixed(2)+"%");
						$("#wb20").html(parseFloat(wb1).toFixed(2)+"%");
						$("#hb20").html(parseFloat(hb1).toFixed(2)+"%");


						var fb2 = (fb40/(fb40+wb40+hb40)) * 100;
						var wb2 = (wb40/(fb40+wb40+hb40)) * 100;
						var hb2 = (hb40/(fb40+wb40+hb40)) * 100;
						console.log("hello at final " + fb30);
						$("#fb30").html(parseFloat(fb2).toFixed(2)+"%");
						$("#wb30").html(parseFloat(wb2).toFixed(2)+"%");
						$("#hb30").html(parseFloat(hb2).toFixed(2)+"%");


						var fb3 = (fb50/(fb50+wb50+hb50)) * 100;
						var wb3 = (wb30/(fb50+wb50+hb50)) * 100;
						var hb3 = (hb30/(fb50+wb50+hb50)) * 100;
						console.log("hello at final " + fb30);
						$("#fb40").html(parseFloat(fb3).toFixed(2)+"%");
						$("#wb40").html(parseFloat(wb3).toFixed(2)+"%");
						$("#hb40").html(parseFloat(hb3).toFixed(2)+"%");


						var fb4 = (fb60/(fb60+wb60+hb60)) * 100;
						var wb4 = (wb30/(fb60+wb60+hb60)) * 100;
						var hb4 = (hb30/(fb60+wb60+hb60)) * 100;
						console.log("hello at final " + fb30);
						$("#fb50").html(parseFloat(fb4).toFixed(2)+"%");
						$("#wb50").html(parseFloat(wb4).toFixed(2)+"%");
						$("#hb50").html(parseFloat(hb4).toFixed(2)+"%");

						var fb5 = (fb70/(fb70+wb70+hb70)) * 100;
						var wb5 = (wb30/(fb70+wb70+hb70)) * 100;
						var hb5 = (hb30/(fb70+wb70+hb70)) * 100;
						console.log("hello at final " + fb30);
						$("#fb60").html(parseFloat(fb5).toFixed(2)+"%");
						$("#wb60").html(parseFloat(wb5).toFixed(2)+"%");
						$("#hb60").html(parseFloat(hb5).toFixed(2)+"%");


						
						
					});  
				});
			});
		});


	});

	




</script>



@endsection


@section('content')
	

	<div class="row">
		<div class="col-md-6 col-md-offset-2">
			<h1>Do you want to show advertise with the news</h1>
			<hr>
			{!! Form::open(['url' => 'http://localhost:8000/advertise' ]) !!}
    			
    			
				{!! Form::radio('answer', "Yes", false, ['class' => 'cat', 'id'=>'yes']) !!}
				{{ 'Yes&nbsp;' }}
				{!!  Form::radio('answer', "No", false, array('class' => 'cat', 'id' => 'no')) !!}
				{{ 'No&nbsp;' }}
				<br>	
    			
			{!! Form::close() !!}
		</div>
	</div>

	<br />

	<br />

	
	<div class="row" id="options">
	<div class="col-md-7 col-md-offset-1">
		{!! Form::open(['url' => 'http://localhost:8000/advertise' ]) !!}
    			
    			
				{!! Form::radio('option', "sports", false, ['class' => 'cat']) !!}
				{{ 'sports wear&nbsp;' }}
				{!!  Form::radio('option', "political", false, array('class' => 'cat')) !!}
				{{ 'technology based&nbsp;' }}
				{!!  Form::radio('option', "technology", false, array('class' => 'cat')) !!}
				{{ 'automobile&nbsp;' }}
				{!!  Form::radio('option', "entertainment", false, array('class' => 'cat')) !!}
				{{ 'food&nbsp;' }}
				

				<br>	

			{!! Form::close() !!}
			</div>
	</div>
	<br>
	<br>
	<br>
	<div class="row">
	<div class="col-md-7 col-md-offset-1">
	{!! Form::open(['url' => '#' ]) !!}
		{!!  Form::label('Image', 'Image:') !!}
    	{!!  Form::file('image', null,  array('class' => 'form-control')) !!}
    	{!! Form::close() !!}
    	<br>
		<a href="http://localhost:8000/" class="btn btn-success btn-block">Submit</a>
		</div>
	</div>
	<br>
	<br>
	<br>


	<div class="row" id="table">

		<table class="table table-striped">

			<thead>
				<th>Category</th>
				<th>Age 20-30</th>
				<th>Age 31-40</th>
				<th>Age 41-50</th>
				<th>Age 51-60</th>
				<th>Age 61-70</th>
			</thead>

			<tbody>
				<tr>
					<td>Facebook</td>
					<td id='fb20'></td>
					<td id='fb30'></td>
					<td id='fb40'></td>
					<td id='fb50'></td>
					<td id='fb60'></td>
					
					
				</tr>

				<tr>
					<td>Website</td>
					<td id='wb20'></td>
					<td id='wb30'></td>
					<td id='wb40'></td>
					<td id='wb50'></td>
					<td id='wb60'></td>
				</tr>

				<tr>
					<td>Hard Copy</td>
					<td id='hb20'></td>
					<td id='hb30'></td>
					<td id='hb40'></td>
					<td id='hb50'></td>
					<td id='hb60'></td>
				</tr>
			</tbody>

		</table>
		
	</div>
	

@endsection