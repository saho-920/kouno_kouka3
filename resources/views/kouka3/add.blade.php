@extends('layouts.kouka3')

@section('title', 'kouka3')

@section('menu_title')
家計簿新規登録画面
@endsection

@section('content')
@if (count($errors) > 0)
<div>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
   <form action="/kouka3/create" method="post">
    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
   <table>
      @csrf
      {{--  新規登録画面のレイアウト  --}}
      <tr><th>name: </th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>
      <tr><th>date: </th><td><input type="text" name="date" value="{{old('date')}}"></td></tr>
      <tr><th>debit: </th><td><input type="text" name="debit" value="{{old('debit')}}"></td></tr>
    <tr><th>d_money: </th><td><input type="text" name="d_money" value="{{old('d_money')}}"></td></tr>
    <tr><th>credit: </th><td><input type="text" name="credit" value="{{old('credit')}}"></td></tr>
    <tr><th>c_money: </th><td><input type="text" name="c_money" value="{{old('c_money')}}"></td></tr>
    <tr><th></th><td><input type="submit" value="新規登録"></td></tr>
   </table>
   </form>
@endsection

@section('footer')
kouno kouka3
@endsection
