@extends('layouts.form')
@section('card')
    @component('components.card')
        @slot('title')
            @lang('Modifier une formation')
        @endslot
        <form method="POST" action="{{ route('msgcontact.update', $msgcontact->id) }}">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            @include('partials.form-group', [
                'title' => __('Nom'),
                'type' => 'text',
                'name' => 'last_name',
                'value' => $msgcontact->last_name,
                'required' => true,
                ])
            @include('partials.form-group', [
                'title' => __('Prénom'),
                'type' => 'text',
                'name' => 'first_name',
                'value' => $msgcontact->first_name,
                'required' => true,
                ])
            @include('partials.form-group', [
                'title' => __('Email'),
                'type' => 'email',
                'name' => 'email',
                'value' => $msgcontact->email,
                'required' => true,
                ])
            @include('partials.form-group', [
                'title' => __('Téléphone'),
                'type' => 'text',
                'name' => 'phone',
                'value' => $msgcontact->phone,
                'required' => false,
                ])
            @include('partials.form-group', [
                'title' => __('Sujet'),
                'type' => 'text',
                'name' => 'subject',
                'value' => $msgcontact->subject,
                'required' => true,
                ])
            @include('partials.form-group', [
                'title' => __('Message'),
                'type' => 'text',
                'name' => 'message',
                'value' => $msgcontact->message,
                'required' => true,
                ])
            @component('components.button')
                @lang('Envoyer')
            @endcomponent
        </form>
    @endcomponent            
@endsection