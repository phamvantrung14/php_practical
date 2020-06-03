<?php

namespace App\Http\Controllers;
use App\Book;
use Illuminate\Http\Request;

class bookController extends Controller
{
    public function index()
    {
        $book = Book::paginate(10);
        return view("book.list_book",compact("book"));
    }
    public function new()
    {
        return view("book.new");
    }
    public function save(Request $request)
    {
//        dd($request->all());
        $request->validate([
           "title" =>"required|string",
           "authorid" =>"required|numeric",
           "ISBN" =>"required|string",
           "pub_year" =>"required|numeric",
        ]);
        try {
            Book::create([
                "title" => $request->title,
                "authorid"=>$request->authorid,
                "ISBN" => $request->ISBN,
                "pub_year"=> $request->pub_year,
                "avaliable"=>$request->avaliable,
            ]);
        }catch (\Exception $exception)
        {
            return redirect()->back();
        }
        return redirect()->route("index");
    }

    public function search(Request $request)
    {
        $book = Book::where("title",$request->name_title)->paginate(10);
        return view("book.list_book",compact("book"));
    }
}
