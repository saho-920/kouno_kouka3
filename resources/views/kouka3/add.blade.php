@extends('layouts.kouka3')

@section('title', 'Jissyu')

@section('menu_title')
ユーザー新規登録画面
@endsection

@section('content')
@if (count($errors) > 0)
<div>
    <ul>
        @foreach ($errors as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
   <form action="/kouka3/create" method="post">
   <table>
      @csrf
      <tr><th>name: </th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>
    <tr><th>password: </th><td><input type="text" name="password" value="{{old('password')}}"></td></tr>
    <tr><th></th><td><input type="submit" value="新規登録"></td></tr>
   </table>
   </form>
@endsection

@section('footer')
kouno kouka3
@endsection
