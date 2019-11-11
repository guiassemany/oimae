<div class="card directory-card">
    <div class="p-4 directory-content">
        <div class="float-right info-icon p-1">
            <a href="#">
                <i class="mdi mdi-information-variant h5 text-primary"></i>
                <span class="font-16 text-muted">Info</span>
            </a>
        </div>
        <div class="media">
            <img class="d-flex mr-3 rounded-circle thumb-md"
                 src="{{asset('backend/assets/images/baby-boy-icon-22.jpg')}}" alt="ícone Bebê">
            <div class="media-body text-white">
                <h5 class="mt-0 font-18 mb-1">{{$baby->name}}</h5>
                <p class="text-white-50 m-b-5">
                    @if($baby->gender == 'boy')
                        Menino
                    @else
                        Menina
                    @endif
                </p>
                <p class="font-600">{{$baby->weeks}} semana(s)</p>
            </div>
        </div>
    </div>
    <div>
        <ul class="text-center list-inline mb-0 p-3">
            <li class="list-inline-item">
                <a role="button" class="btn btn-pink btn-rounded" href="{{route('babies.details', $baby->id)}}">
                    <i class="mdi mdi-baby-buggy"></i> Ver detalhes
                </a>
            </li>
        </ul>
    </div>
</div>
