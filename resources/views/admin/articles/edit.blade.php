@extends ('admin.layout') @section ('content')
<div class="page">
    <div class="container">
        <div class="row">
            <h1>Редактировать статью</h1>
            <div class="divider"></div>
            <div class="col-xs-12">
                @include ('partials.errors')
                <form action="/admin/articles/{{ $article->id }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
                    <div class="form-group">
                        <label for="name">Название</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $article->name }}"> 
                    </div>
                    <div class="form-group">
                        <label for="desc">Краткое описание</label>
                        <textarea type="text" class="form-control" id="desc" name="desc">{!! $article->desc !!}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="content">Контент</label>
                        <textarea type="text" class="form-control" id="content" name="content">{!! $article->content !!}</textarea>
                    </div>
                    <div class="form-group" style="margin: 20px 0">
                        <label for="image">Изменить изображение</label>
                        <input type="file" id="image" name="image">
                        <img src="{{ $article->image }}" class="thumb">
                    </div>
                    <button type="submit" class="btn Button Button--green" style="float: right">Редактировать</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
