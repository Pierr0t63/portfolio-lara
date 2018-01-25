@extends('layouts.app')

@section('content')
	<header >
	    <div id="projects" class="titre-header full-height text-center">
            <h1 class="text-center">
				Mes réalisations<br>
				et projets
            </h1>
	    </div>
	</header>
	@foreach($projects as $project)
		<section class="container-fluid sectionProjet" style="background-image: url('{{ asset($project->url_img)}}'); background-size: cover;" >
			<div class="row">
				<span data-tilt data-tilt-axis="y">
					<div class="col-md-12" style="transform-style: preserve-3d;">
						<div class="descriptions">
							<h2 class="text-center" style="transform: translateZ(20px)"> {{$project->name}} </h2>

							<p style="transform: translateZ(20px)">
								{{$project->description}}
							</p>
							<p class="text-center">
								<a href="{{$project->url_ext}}" title="Projet site internet de {{$project->name}}" target="_blank">Vers le site <i class="fa fa-external-link fa-1" aria-hidden="true"></i></a> 
							<p>
						</div>
					</div>
				</span>
			</div>
		</section>
	@endforeach

@endsection