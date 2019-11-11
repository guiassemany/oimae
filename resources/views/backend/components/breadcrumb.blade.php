<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="page-title mb-0">{{$title}}</h4>
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="#">Oi Mãe</a></li>
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{$currentPage}}</li>
                    </ol>
                </div>
                @if(isset($button))
                    <div class="col-md-4">
                        <div class="float-right d-none d-md-block">
                            <div class="dropdown">
                                {{$button}}
                            </div>
                        </div>
                    </div>
                @endif
            </div>

        </div>
    </div>
</div>
