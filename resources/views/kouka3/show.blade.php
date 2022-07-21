@extends('layouts.kouka3')

@section('title', 'kouka3')

@section('menu_title')
家計簿詳細画面

@endsection
@section('content')
    {{--  詳細画面のレイアウト  --}}
   <table>
   <tr><th>Name</th><th>date</th><th>debit</th><th>d_money</th><th>credit</th><th>c_money</th></tr>
       <tr>
        <td>{{$item->name}}</td>
        <td>{{$item->date}}</td>
        <td>{{$item->debit}}</td>
        <td>{{$item->d_money}}</td>
        <td>{{$item->credit}}</td>
        <td>{{$item->c_money}}</td>
       </tr>
   </table>
@endsection

@section('footer')
kouno kouka3
@endsection

