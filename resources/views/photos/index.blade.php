@extends('layout') @section('content')
<div class="page">
    <h1>фотографии</h1>
    <div class="divider"></div>
    <div class="container">
        @include ('partials.search-results', ['url' => 'photos/search*'])
        @if (count($photos))
            @foreach ($photos->chunk(3) as $photosRow)
            <div class="row">
                @foreach ($photosRow as $photo)
                <div class="col-md-4 portfolio-item">
                    <img class="img-responsive" src="{{ $photo->image }}" alt="">
                    <div class="photo-description">
                        <p>{!! $photo->description !!}</p>
                        <a href="/photos/{{ $photo->id }}" class="btn Button Button__more--positioned" style="right: 20px; bottom: 20px">подробнее</a> 
                    </div>
                </div>
                @endforeach
            </div>
            @endforeach
            <div class="pagination-wrapper">
            @if (!Request::is('photos/search*'))
                {!! $photos->render() !!}
            @endif
            </div>
        @endif
    </div>
</div>
@stop
