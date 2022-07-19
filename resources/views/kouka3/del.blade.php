@extends('layouts.kouka3')

@section('title', 'Jissyu')

@section('menu_title')
家計簿削除画面
@endsection

@section('content')
   <form action="/kouka3/remove" method="post">
   <table>
      @csrf
      <input type="hidden" name="id" value="{{$item->id}}">
      <tr><th>name: </th><td>{{$item->name}}</td></tr>
      <tr><th>mail: </th><td>{{$item->mail}}</td></tr>
      <tr><th>age: </th><td>{{$item->age}}</td></tr>
      <tr><th></th><td><input type="submit" value="削除"></td></tr>
   </table>
   </form>
@endsection

@section('footer')
kouno kouka3
@endsection

