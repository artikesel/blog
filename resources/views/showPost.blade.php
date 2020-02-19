@extends('layouts.layouts')

@section('title')
Artica-Post {{$post->id}}
@endsection


@section('content')
<div id="showPost">
    <h1 class="title"> {{$post->title}}</h1>

    <h2>{{$post->body}}</h2>

    <br><br><br>
    @if ($errors->any())
        @foreach($errors->all() as $er)
            <p style="color:red">{{$er}}</p>
        @endforeach
    @endif
    <form action="" method="POST">
        @csrf
        <input type="text" name="text" placeholder="" value="">
        <input type="submit" name="submit" value="Отправить">
    </form>
</div>



@endsection
