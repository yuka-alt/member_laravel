@extends('layouts.app')
@section('title', '編集画面')

<h1 class= "title">会員編集 会員ID {{$user->id}}</h1>

<form method="POST" action="{{route('update', ['id' =>$user->id])}}">
  @csrf

  <div class="center">
      <input type="text" name=name value="{{$user->name}}" class="text">
  </div>

  <div class="center">
      <input type="text" name=phone value="{{$user->phone}}" class="text">
  </div>

  <div class="center">
      <input type="text" name=email value="{{$user->email}}" class="text">
  </div>

    <div style= "text-align: center;">
  <input type="submit" value='編集' class ='btn' >
  </div>


</form>

<form action="{{route('destroy', $user->id)}}" method="post">
@csrf
<div style= "text-align: center;">
<button type="submit" id="delete-task-{{ $user->id }}" class ='btn' >
    削除
</button>
</div>
</form>