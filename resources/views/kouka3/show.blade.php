@extends('layouts.kouka3')

@section('title', 'Jissyu')

@section('menu_title')
家計簿詳細画面

@endsection
@section('content')
   <table>
   <tr><th>Name</th></tr>
       <tr>
           <td>{{$item->getData()}}</td>
           <td>{{$item->mail}}</td>
       </tr>
   </table>
@endsection

@section('footer')
kouno kouka3
@endsection

