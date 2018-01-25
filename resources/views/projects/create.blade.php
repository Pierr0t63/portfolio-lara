@extends('layouts.form')
@section('card')
    @component('components.card')
        @slot('title')
            @lang('Ajouter un projet')
        @endslot
        <form method="POST" action="{{ route('project.store') }}">
            {{ csrf_field() }}
            @include('partials.form-group', [
                'title' => __('Nom'),
                'type' => 'text',
                'name' => 'name',
                'required' => true,
                ])
            @include('partials.form-group', [
                'title' => __('Description'),
                'type' => 'text',
                'name' => 'description',
                'required' => true,
                ])
            @include('partials.form-group', [
                'title' => __('URL locale'),
                'type' => 'text',
                'name' => 'url_img',
                'required' => false,
                ])
            @include('partials.form-group', [
                'title' => __('URL Externe'),
                'type' => 'text',
                'name' => 'url_ext',
                'required' => false,
                ])
            @component('components.button')
                @lang('Envoyer')
            @endcomponent
        </form>
    @endcomponent            
@endsection