@extends('template')

@section('title')
    Voici un Formulaire
@stop
@section('contenu')
    {!! Form::open(['url'=>'users']) !!}
        {!! Form::label('nom', 'Entrez votre nom : ') !!}
        {!! Form::text('nom') !!}
        <br>
        {!! Form::label('prenom','Entrez votre prenom : ') !!}
        {!! Form::text('prenom') !!}
        <br>
        {!! Form::submit('Envoyer !') !!}
    {!! Form::close() !!}
@stop
