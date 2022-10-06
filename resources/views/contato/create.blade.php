@extends('layout.app')
@section('title','Criar Novo Contato')
@section('content')
   <h1>Criar Novo Contato</h1>
   {{Form::open(['route'=>'contatos.store','method'=>'POST'])}}
   {{Form::label('nome', 'Nome')}}
   {{Form::text('nome', '',['class'=>'form-control','required','placeholder'=>'Nome Completo'])}}
   {{Form::label('email', 'e-mail')}}
   {{Form::text('email', '',['class'=>'form-control','required','placeholder'=>'E-mail'])}}
   {{Form::label('telefone', 'Telefone')}}
   {{Form::text('telefone', '',['class'=>'form-control','required','placeholder'=>'(xx) xxxxx-xxxx'])}}
   {{Form::label('cidade', 'Cidade')}}
   {{Form::text('cidade', '',['class'=>'form-control','required','placeholder'=>'Nome da Cidade'])}}
   {{Form::label('estado', 'Estado')}}
   {{Form::text('estado', '',['class'=>'form-control','required','placeholder'=>'Nome do Estado'])}}
    <br>
   {{Form::submit('Salvar', ['class'=> 'btn btn-success'])}}
   {!!Form::button('Cancelar',['onclik'=>'javascript:history.go(-1)','class'=>'btn btn-secondary'])!!}
   {{Form::close()}}
@endsection