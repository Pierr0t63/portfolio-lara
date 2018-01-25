@extends('layouts.form')
@section('card')
    @component('components.card')
        @slot('title')
            @lang('Modifier une formation')
        @endslot
        <form method="POST" action="{{ route('training.update', $training->id) }}">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            @include('partials.form-group', [
                'title' => __('Nom'),
                'type' => 'text',
                'name' => 'name',
                'value' => $training->name,
                'required' => true,
                ])
            @include('partials.form-group', [
                'title' => __('Description'),
                'type' => 'text',
                'name' => 'description',
                'value' => $training->description,
                'required' => true,
                ])
            @include('partials.form-group', [
                'title' => __('Durée'),
                'type' => 'text',
                'name' => 'duration',
                'value' => $training->duration,
                'required' => false,
                ])
            @component('components.button')
                @lang('Envoyer')
            @endcomponent
        </form>
    @endcomponent            
@endsection