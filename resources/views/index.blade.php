@extends('layouts.app')
@section('main')
<!-- <h1>一覧表示</h1> -->

<div class="indexbtn">
<a href="{{ route('create') }}">{{ __('>>登録') }}</a>
</div>
<table class = "indextable">
    <tr>
        <th>名前</th>
        <th>電話番号</th>
        <th>メールアドレス</th>
    </tr>
    
    @foreach($tasks as $user)
    <tr>
        <td>{{$user->name}}</td>
        <td>{{$user->phone}}</td>
        <td>{{$user->email}}</td>
        <td><a href="{{ route('edit', ['id' => $user->id]) }}">{{ __('>>編集') }}</a></td>
    </tr>
    @endforeach
</table>