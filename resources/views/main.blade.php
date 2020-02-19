@extends('layouts.layouts')


@section('title')
Artica
@endsection

@section('content')
<div id="myWelcome">
    <span>lifestyle</span>
    <h1>In RUSSIA</h1>
    <a href="#"><h3>Read More</h3></a>
</div>

<div id="resentPostsWrapper">
    <h1>Latest</h1>

    @foreach ($posts as $post)
        <div class="resentPost">
            @if($post->id == 6)
                <div class="imgBox">
                    <img src="{{url('/img/post2.jpg')}}" alt="">
                </div>
            @endif
            <span> {{$post->сategory}}</span>
            <h2>{{$post->title}}</h2>
            <h3>{{$post->body}}</h3>
            <span>{{$post->created_at}}</span><br>
            <div class="likePost" >
                <span>{{$post->likes}}</span> <i class="fa fa-thumbs-up" aria-hidden="true"></i>
            </div><br>
            <a class="readPost" href="{{route('post.show', ['id'=>$post->id]) }}">Читать</a>
        </div>
    @endforeach

</div>
<div class="sidebar">
    <h3>About me</h3>
    <img src="{{url('/img/ava.jpg')}}" alt="">
    <span>Ahasellus rhoncus laoreet odio, sit amet rutrum metus aliquet quis. Sed sed nulla erat. Curabitur ullamcorper dum tortor.</span>
    <div>
        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-vk" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
    </div>
    <h3>newslatter</h3>
    <form class="" action="index.html" method="post">
        <input type="email" name="emaliForSubcribe" placeholder="Your email" value="">
        <input type="submit" name="subscribe" value="SUBSCRIBE">
    </form>
</div>
@endsection
