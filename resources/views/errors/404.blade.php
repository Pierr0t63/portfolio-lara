@extends('layouts.404-app')

@section('404-content')
	<div class="overlay"></div>
	<div class="terminal">
	  <h1>Erreur <span class="errorcode">404</span></h1>
	  <p class="output">La page demandée n'existe pas ou a été supprimée</ü>
	  <p class="output">Veuillez vous rendre à <a href="{{ url('/') }}">l'Accueil</a> ou me <a href="{{ url('/contact') }}">signaler</a> un problème.</p>
	  <p class="output">Merci :-) <span id="blink">|</span></p>
	</div>
@endsection