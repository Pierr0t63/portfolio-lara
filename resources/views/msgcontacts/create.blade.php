@extends('layouts.form')
@section('card')
    @component('components.card')
        @slot('title')
            @lang('Ajouter une formation')
        @endslot
        <form method="POST" action="{{ route('training.store') }}">
            {{ csrf_field() }}
            @include('partials.form-group', [
                'title' => __('Nom'),
                'type' => 'text',
                'name' => 'last_name',
                'required' => true,
                ])
            @include('partials.form-group', [
                'title' => __('Prénom'),
                'type' => 'text',
                'name' => 'first_name',
                'required' => true,
                ])
            @include('partials.form-group', [
                'title' => __('Email'),
                'type' => 'email',
                'name' => 'email',
                'required' => true,
                ])
            @include('partials.form-group', [
                'title' => __('Téléphone'),
                'type' => 'text',
                'name' => 'phone',
                'required' => false,
                ])
            @include('partials.form-group', [
                'title' => __('Sujet'),
                'type' => 'text',
                'name' => 'subject',
                'required' => true,
                ])
            @include('partials.form-group', [
                'title' => __('Message'),
                'type' => 'text',
                'name' => 'message',
                'required' => true,
                ])
            @component('components.button')
                @lang('Envoyer')
            @endcomponent
        </form>
    @endcomponent            
@endsection