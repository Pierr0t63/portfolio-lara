@extends('layouts.form')
@section('card')
    @component('components.card')
        @slot('title')
            @lang('Modifier une aptitude')
        @endslot
        <form method="POST" action="{{ route('skill.update', $skill->id) }}">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            @include('partials.form-group', [
                'title' => __('Nom'),
                'type' => 'text',
                'name' => 'name',
                'value' => $skill->name,
                'required' => true,
                ])
            @include('partials.form-group', [
                'title' => __('Niveau'),
                'type' => 'text',
                'name' => 'level',
                'value' => $skill->level,
                'required' => true,
                ])
            @component('components.button')
                @lang('Envoyer')
            @endcomponent
        </form>
    @endcomponent            
@endsection