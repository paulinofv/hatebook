@extends('layouts.app')

@section('content')
<div class="panel-heading">Tu pinche post</div>
<div class="panel-body">
    <div class="media">
      <div class="media-left">
        <a href="#">
          <img class="media-object" src="..." alt="...">
        </a>
      </div>
      <div class="media-body">
        {{ $post->content }}
        <footer>
            Creado {{ $post->created_at }}
        </footer>
      </div>
    </div>
</div>
@stop