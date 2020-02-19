@extends('layouts.layouts')
@section('title')
Create Post
@endsection

@section('content')
    <form class="createForm" action="{{url('/createform')}}" method="post">
        @csrf
        <input type="text" name="title" value="{{old('title')}}"><br>
        @if($errors->has('title'))
            <p class="error-form">{{$errors->first('title')}}</p>
        @endif
        <textarea name="body" rows="8" cols="80">{{old('body')}}</textarea><br>
        @if($errors->has('body'))
            <p class="error-form">{{$errors->first('body')}}</p>
        @endif
        <select class="" name="category">
            <option value="lifestyle">lifestyle</option>
            <option value="programming">programming</option>
            <option value="sport">sport</option>
        </select><br>
        <input type="submit" name="addPost" value="Добавить">
    </form>
@endsection
