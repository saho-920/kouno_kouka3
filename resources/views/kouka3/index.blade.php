@extends('layouts.kouka3')

@section('title', 'kouka3')

@section('menu_title')
家計簿
@endsection

@section('content')
    <form action="/kouka3/find" method="post">
    @csrf
    <input type="text" name="input" value="{{$input}}">
    <input type="submit" value="検索">
    </form>
   <a href="/kouka3/add">新規登録</a>
   {{--  メインページのレイアウト  --}}
   <table class="table table-hover">

    <tr><th>Name</th><th>date</th><th>debit</th><th>d_money</th><th>credit</th><th>c_money</th><th>Select</th><th>Update</th><th>Delete</th></tr>
    @foreach ($items as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->date}}</td>
            <td>{{$item->debit}}</td>
            <td>{{$item->d_money}}</td>
            <td>{{$item->credit}}</td>
            <td>{{$item->c_money}}</td> 
           <td><a href="/kouka3/show?id={{$item->id}}">詳細</a></td>
           <td><a href="/kouka3/edit?id={{$item->id}}">更新</a></td>
           <td><a href="/kouka3/del?id={{$item->id}}">削除</a></td>
       </tr>
   @endforeach
   </table>
@endsection

@section('footer')
kouno kouka3
@endsection

