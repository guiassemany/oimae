@extends('layouts.app')

@section('breadcrumb')
    @component('backend.components.breadcrumb')
        @slot('title')
            Detalhes sobre {{$baby->name}}
        @endslot
        @slot('currentPage')
            Detalhes sobre {{$baby->name}}
        @endslot
    @endcomponent
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 text-center">
                                <img src="{{$baby->avatar ?? asset('backend/assets/images/baby-boy-icon-22.jpg')}}"
                                     alt="Imagem do bebê" class="img-thumbnail">
                                <hr>
                                <h5 class="text-pink">{{$baby->name}}</h5>
                                <ul class="list-group">
                                    <li class="list-group-item text-dark text-left">
                                        Semanas: {{$baby->weeks}}
                                    </li>
                                    <li class="list-group-item text-dark text-left">
                                        Gênero: {{$baby->gender === 'boy' ? 'Menino' : 'Menina'}}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-8">
                <div class="card">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                               aria-controls="home" aria-selected="true">Informações básicas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="assistant-tab" data-toggle="tab" href="#assistant" role="tab"
                               aria-controls="profile" aria-selected="false">Assistente</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            {{Form::model($baby, ['route' => ['babies.update', $baby->id], 'method' => 'put'])}}
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
                                    Atualizar informações
                                </button>
                            </div>
                            {{Form::close()}}
                        </div>
                        <div class="tab-pane fade" id="assistant" role="tabpanel" aria-labelledby="assistant-tab">...</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('extra-js')
    <script src="https://assistant-web.watsonplatform.net/loadWatsonAssistantChat.js"></script>
    <script>
        var options = {
            integrationID: '6e902c8d-4961-4a87-8287-0b9750b53232', // A UUID like '1d7e34d5-3952-4b86-90eb-7c7232b9b540'
            region: 'us-south', // 'us-south', 'us-east', 'jp-tok' 'au-syd', 'eu-gb', 'eu-de', etc
            locale: 'pt-br'
        };
        window.loadWatsonAssistantChat(options).then(function(instance) {
            instance.render().then(function() {
                console.log('Web Chat has rendered and fetched initial welcome message');
            });
        });
    </script>
@endpush

@push('extra-css')
    <style>
        .WatsonAssistantChatMobileHelper-widgetOpen_open {
            position: inherit !important;
        }
    </style>
@endpush
