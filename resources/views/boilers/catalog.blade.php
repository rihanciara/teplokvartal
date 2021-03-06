@extends('layout') @section('content')

<div class="page">
    <div class="container">
        <h1>{{ Request::input('queryString') ? 'Результаты поиска' : 'Каталог котлов' }}</h1>
        <div class="divider"></div>
        @if ( Request::is('boilers/search*') )
            @include ('partials.search-results', ['returnUrl' => '/boilers/catalog'])
        @endif
        @if (count($boilers))
            @foreach ($boilers as $boiler)
            <div class="boiler">
                <div class="col-md-3">
                    @if ( $boiler->image )
                    <img class="img-responsive item-img" src="{{ $boiler->image }}" alt="picture">@endif
                </div>
                <div class="col-md-9">
                    <h3>{{ $boiler->name }}</h3>
                    <h4>Описание</h4>
                    <div class="description">{!! $boiler->desc !!}</div>
                    <!--<h4>Толщина: </h4>
                    <label class="radio-inline">
                        <input type="radio" name="width" value="0.5" checked="checked">0.5мм AISI 304
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="width" value="0.8">0.8мм AISI 304
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="width" value="1">1мм AISI 321
                    </label>
                    <span id="name" style="display: none">{{ $boiler->name }}</span>
                    <h4>Тип</h4>
                    <p class="description">{{ $boiler->type }}</p>-->
                </div>
                <div class="col-xs-12" style="margin-top: 30px">
                    <a href="/boilers/{{ $boiler->id }}" class="btn Button pull-right"><i class="fa fa-chevron-right" aria-hidden="true"></i> Подробнее</a>
                </div>
            </div>
            @endforeach
            <div class="pagination-wrapper">
            @if (!Request::is('boilers/search*'))
               {!! $boilers->render() !!}
            @endif
            </div>
        @endif
    </div>
</div>
@stop
