@extends('layouts.app')

@section('breadcrumb')
    @component('backend.components.breadcrumb')
        @slot('title')
            Cadastre seu bebê
        @endslot
        @slot('currentPage')
            Cadastre seu bebê
        @endslot
    @endcomponent
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-6 offset-lg-3">
                <div class="card">
                    {{Form::open(['route' => 'babies.store', 'method' => 'post'])}}
                    <div class="card-body">
                        <h5 class="card-title">
                            Informações do Bebê
                        </h5>
                        <div class="row">
                            <div class="col-12 mt-4">
                                {{Form::label('Nome', null)}}
                                {{Form::text('name', null, ['class' => 'form-control'])}}
                            </div>
                            <div class="col-12 mt-4">
                                {{Form::label('Gênero')}}
                                {{Form::select('gender', ['boy' => 'Menino', 'girl' => 'Menina'], null, ['class' => 'form-control'])}}
                            </div>
                            <div class="col-12 mt-4">
                                {{Form::label('Quantas semanas de gravidez?')}}
                                {{Form::number('weeks', null, ['class' => 'form-control'])}}
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <button class="btn btn-success btn-block" type="submit">
                            Cadastrar
                        </button>
                    </div>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
@endsection
