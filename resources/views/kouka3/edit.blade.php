@extends('layouts.kouka3')

@section('title', 'kouka3')

@section('menu_title')
家計簿更新画面
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
   <form action="/kouka3/update" method="post">
   <table>
      @csrf
      {{--  更新画面のレイアウト  --}}
      <input type="hidden" name="id" value="{{$item->id}}">
      <tr><th>date: </th><td><input type="text" name="date" value="{{$item->date}}"></td></tr>
      <tr><th>debit: </th><td><input type="text" name="debit" value="{{$item->debit}}"></td></tr>
      <tr><th>d_money: </th><td><input type="text" name="d_money" value="{{$item->d_money}}"></td></tr>
      <tr><th>credit: </th><td><input type="text" name="credit" value="{{$item->credit}}"></td></tr>
      <tr><th>c_money: </th><td><input type="text" name="c_money" value="{{$item->c_money}}"></td></tr>
      <tr><th></th><td><input type="submit" value="更新"></td></tr>

   </table>
   </form>
@endsection

@section('footer')
kouno kouka3
@endsection
