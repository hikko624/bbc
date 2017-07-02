@extends('default')
@section('content')
<div class="container">
@foreach($posts as $post)
    <h2>タイトル: {{ $post->title }}
        <small>投稿日: {{ date("Y年 m月 d日",strtotime($post->created_at)) }}</small>
    </h2>
    <p>カテゴリー: {{ $post->category->name }}</p>
    <p>{{ $post->content }}</p>
    <!--<p>{{ url('/{ $post->id }', '続きを読む', array('class' => 'btn btn-primary')) }}</p>-->
    <button class='btn btn-primary'>続きを読む</button>
    <p>コメント数: {{$post->comment_count}} </p>
    <hr />
@endforeach
</div>
