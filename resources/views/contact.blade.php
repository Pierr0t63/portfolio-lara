@extends('layouts.app')

@section('content')
    	<section class="container">
			<div class="row">
				<div class="col-md-12" id="formulaire" style="background: url('img/contact/contact.jpg');">
					{{ Form::open(array('url' => '/contact','files'=>'false')) }}
					<h1 class="text-center" text="Me contacter">Me contacter</h1>
					<p>
						<input type="text" name="nom" id="nom" placeholder="Nom *">
					</p><!--
					--><p>
						
						<input type="text" name="prenom" id="prenom" placeholder="Prénom *">
					</p><!--
					--><p>
						<input type="mail" name="addrMail" id="addrMail" placeholder="E-mail *">
					</p><!--
					--><p>
						<input type="text" name="tel" id="tel" placeholder="N° de téléphone">
					</p><!--
					--><p class="text-center">
						<label>Raison de contact *:</label>
						<select name="raison" id="raison">
							<option value="1">Professionnelle</option>
							<option value="2">Personnelle</option>
							<option value="3">Autre</option>
						</select>
					</p><!--
					--><p>
						<input type="text" name="sujet" id="sujet" placeholder="Sujet *">
					</p><!--
					--><p>
						<textarea name="msguser" id="msguser" placeholder="Message *"></textarea>
					</p>
					@isset ($errorsMail)
					    <div class="alert alert-danger text-center">
					        <ul>
					            @foreach ($errorsMail->all() as $errorMail)
					                <li>{{ $errorMail }}</li>
					            @endforeach
					        </ul>
					    </div>
					@endisset
					@if ($errors->any())
					    <div class="alert alert-danger text-center">
					        <ul>
					            @foreach ($errors->all() as $error)
					                <li>{{ $error }}</li>
					            @endforeach
					        </ul>
					    </div>
					@elseif(session()->has('message'))
						<div class="alert alert-success text-center">
					        <ul>
					            <li>{{ session()->get('message') }}</li>
					        </ul>
					    </div>
					@endif
					{{ Form::submit('Envoyer !',['class' => 'text-center btn']) }}
					<span id="notice" class="text-center">* : Champs obligatoire</span>
					{{ Form::close() }}

					
				</div>
			</div>
     	</section>
     	@endsection