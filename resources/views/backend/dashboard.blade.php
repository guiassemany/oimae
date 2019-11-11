@extends('layouts.app')

@section('breadcrumb')
    @component('backend.components.breadcrumb')
        @slot('title')
            Selecione seu bebê
        @endslot
        @slot('currentPage')
            Início
        @endslot
        @slot('button')
            <a role="button" href="{{route('babies.create')}}" class="btn btn-success">
                Cadastrar novo bebê <i class="mdi mdi-baby-buggy"></i>
            </a>
        @endslot
    @endcomponent
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @foreach(auth()->user()->babies as $baby)
                <div class="col-lg-4 col-md-6">
                    @component('backend.components.baby-card', ['baby' => $baby])
                    @endcomponent
                </div>
            @endforeach
        </div>
    </div>
@endsection
