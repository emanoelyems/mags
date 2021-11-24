@extends('components.layout')

@section('title','Bicos')

@section('content')

    <div id="conteudo" class="container p-0 my-4">

        {{ Form::open(array('url' => '/bico/create')) }}

        <h4 class="bg-royal-blue text-magnolia fw-normal rounded p-2">Cadastrar Bico</h4>

        <div class="d-flex my-1">
            <div id="box1" class="form-floating w-50 me-1">
                {{ Form::text('name', null, ['class' => 'form-control me-1', 'id'=> 'bico', 'placeholder' => 'bico']) }}
                {{ Form::label('bico', 'bico', ['for'=>'bico']) }}
            </div>
            <div id="box2" class="form-floating w-50">
                {{ Form::text('bomba_id', null, ['class' => 'form-control', 'id'=> 'bomba', 'placeholder' => 'bomba']) }} <!-- Mudar de null para bomba_id -->
                {{ Form::label('bomba_id', 'bomba', ['for'=>'bomba']) }}
            </div>
        </div>

        {{ Form::button('Enviar <svg class="mx-2" width="23" height="20" viewBox="0 0 23 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M13.0823 0.245C12.6854 0.599573 12.6509 1.20882 13.0055 1.60591L19.6433 9.03619L0.963817 9.03619C0.431625 9.03619 0 9.46767 0 10C0 10.5322 0.431477 10.9638 0.963817 10.9638L19.6433 10.9638L13.0056 18.3941C12.651 18.791 12.6856 19.4003 13.0824 19.755C13.4794 20.1095 14.0887 20.0753 14.4433 19.6783L21.6551 11.6053C22.0639 11.1478 22.2682 10.5741 22.2682 10.0001C22.2682 9.42633 22.0639 8.85251 21.6553 8.39485L14.4433 0.321831C14.0885 -0.0752616 13.4792 -0.109573 13.0823 0.245Z" fill="#FCF7FF"/>
            </svg>
            ', ['type' => 'submit', 'class' => 'btn btn-royal-blue float-end my-2 col-3 fs-5'] )  }}
    
        {{ Form::close() }}
    </div>
        <a href="{{ URL::to('bico/') }}">Voltar</a>
    
@endsection