@extends('layouts.app')

@section('content')
<br>
<br>
<div id="colorlib-project">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
				<h1><b>{{$project[0]->project_name}}</b></h1>
			</div>
		</div>
		<div class="row">
			@foreach($images as $i)
			<div class="col-md-4 animate-box">
				<div class="project-entry">
					<a href="/storage/{{$i->project_detl_image}}" class="project-img text-center" style="background-image: url(/storage/{{$i->project_detl_image}});">
						<span class="icon"><i class="fas fa-plus-circle"></i></span>

					</a>

				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>


<div id="colorlib-subscribe">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
				<h2>Description</h2>
				{{$project[0]->project_desc}}
			</div>
		</div>

	</div>
</div>

@endsection