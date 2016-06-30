@extends('layout') @section('content')

<div class="page">
    <div class="container">
        <h1>{{ Request::input('queryString') ? 'Результаты поиска' : 'Каталог брикетов' }}</h1>
        <div class="divider"></div>
        @if ( Request::is('briquettes/search*') )
            @include ('partials.search-results', ['returnUrl' => '/briquettes/catalog'])
        @endif
        @if (count($briquettes))
            @foreach ($briquettes as $briquette)
            <div class="briquette">
                <div class="col-md-3">
                    @if ( $briquette->image )
                    <img class="img-responsive item-img" src="{{ $briquette->image }}" alt="picture">@endif
                </div>
                <div class="col-md-9">
                    <h3>{{ $briquette->name }}</h3>
                    <h4>Описание</h4> 
                    <p class="description">{{ $briquette->description }}</p>
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
                    <span id="name" style="display: none">{{ $briquette->name }}</span>
                    <h4>Тип</h4>
                    <p class="description">{{ $briquette->type }}</p>-->
                </div>
                <div class="col-xs-12 col-md-9 col-md-offset-3">
                    <h4>Цены</h4>
                    <div class="table-block">
                        <table class="table table-bordered">
                            <thead style="font-weight: bold">
                                <tr>
                                    <td>Димаметр</td>
                                    <td>100/160</td>
                                    <td>100/160</td>
                                    <td>100/160</td>
                                    <td>100/160</td>
                                    <td>100/160</td>
                                    <td>100/160</td>
                                    <td>100/160</td>
                                    <td>100/160</td>
                                    <td>100/160</td>
                                    <td>100/160</td>
                                    <td>100/160</td>
                                    <td>100/160</td>
                                    <td>100/160</td>
                                    <td>100/160</td>
                                    <td>100/160</td>
                                    <td>100/160</td>
                                    <td>100/160</td>
                                    <td>100/160</td>
                                </tr>
                            </thead>
                            <tr>
                                <td>Труба</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                            </tr>
                            <tr>
                                <td>Труба</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                            </tr>
                            <tr>
                                <td>Труба</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-xs-12">
                    <a href="/briquettes/{{ $briquette->id }}" class="btn Button pull-right">Подробнее <span class="glyphicon glyphicon-chevron-right"></span></a>
                </div>
            </div>
            @endforeach
            <div class="pagination-wrapper">
            @if (!Request::is('briquettes/search*')) 
               {!! $briquettes->render() !!}
            @endif
            </div>
        @endif
    </div>
</div>
@stop
