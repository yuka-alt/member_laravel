@extends('layouts.app')
@section('title', '会員登録')
@section('main')

<h1 class= "title">会員登録</h1>

<form method="POST" action="{{route('store')}}">
  @csrf

  <div class="center">
    <input type="text" name="name" id="form-name" placeholder="名前" required class="text">
  </div>

  <div class="center">
    <input type="tel" name="phone" id="form-tel" placeholder="電話番号" class="text">
  </div>

  <div class="center">
    <input type="email" name="email" id="form-email" placeholder="メールアドレス" class="text">
  </div>

  <div style= "text-align: center;">
  <button type="submit" class ='btn'>登録</button>
    </div>

</form>
@endsection