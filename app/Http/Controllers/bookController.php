<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use App\Http\Requests\BookRequest;

class bookController extends Controller
{
    public function index(Request $request)
    {
        $items = Book::all();
        $param = ['input' => '','items' => $items];
        return view('kouka3.index', $param);
    }

    public function find(Request $request)
    {
        $item = Book::where('name',$request->input)->first();
        return view('kouka3.show', ['item' => $item]);
    }


    public function show(Request $request)
    {
        $item = Book::where('id',$request->id)->first();
        return view('kouka3.show', ['item' => $item]);
    }

    public function add(Request $request)
    {
        return view('kouka3.add');
    }

    public function create(Request $request)
    {
        $this->validate($request,Book::$rules);
        $book = new Book;
        $form = $request->all();
        unset($form['_token']);
        $book->fill($form)->save();
        return redirect('/kouka3');
    }
    public function edit(Request $request)
    {
        $item = Book::find($request->id);
        return view('kouka3.edit', ['item' => $item]);
    }

    public function update(Request $request)
    {
        $this->validate($request, Book::$rules);
        $book = Book::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $book->fill($form)->save();
        return redirect('/kouka3');
    }



    public function del(Request $request)
    {
        $item = Book::find($request->id);
        return view('kouka3.del', ['item' => $item]);
    }

    public function remove(Request $request)
    {
        Book::find($request->id)->delete();
        return redirect('/kouka3');
    }
}
