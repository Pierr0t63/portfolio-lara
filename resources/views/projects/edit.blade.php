@extends('layouts.form')
@section('card')
    @component('components.card')
        @slot('title')
            @lang('Modifier un projet')
        @endslot
        <form method="POST" action="{{ route('project.update', $project->id) }}">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            @include('partials.form-group', [
                'title' => __('Nom'),
                'type' => 'text',
                'name' => 'name',
                'value' => $projet->name,
                'required' => true,
                ])
            @include('partials.form-group', [
                'title' => __('Description'),
                'type' => 'text',
                'name' => 'description',
                'value' => $projet->description,
                'required' => true,
                ])
            @include('partials.form-group', [
                'title' => __('URL d'image),
                'type' => 'text',
                'name' => 'url_img',
                'value' => $projet->url_img,
                'required' => false,
                ])
            @include('partials.form-group', [
                'title' => __('URL Externe'),
                'type' => 'text',
                'name' => 'url_ext',
                'value' => $projet->url_ext,
                'required' => false,
                ])
            @component('components.button')
                @lang('Envoyer')
            @endcomponent
        </form>
    @endcomponent            
@endsection