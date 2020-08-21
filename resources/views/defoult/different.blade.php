@extends('defoult.layouts.layout')

@section('header')

@endsection

@section('sidebar')

@endsection

@section('content')
    <div class="jumbotron">
        <h2 class="blog-post-title">{{$page[0]->title}}</h2>
        <p class="blog-post-meta">{{$page[0]->updated_at}} by <a href="#">{{$page[0]->autor}}</a></p>

        {!! $page[0]->content !!}
    </div>
@endsection
