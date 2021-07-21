<?php

namespace App\Controllers;

use App\Core\App;

class BooksController
{

    /**
     * List all books
     */

    public function index()
    {
        $books = App::get('db')->selectAll('books');

        return view('books-index', compact('books'));
    }

    public function create()
    {
        return view('books-create');
    }

    public function store()
    {
        //TODO: Do some validation and sanitization before storing

        App::get('db')->insert('books', $_POST);

        return redirect('/books');
    }

    public function edit()
    {
        $book = App::get('db')->select('books', $_GET);


        return view('books-edit', compact('book'));
    }


    public function update()
    {
        //TODO: Do some validation and sanitization before storing
        App::get('db')->update('books', $_POST);

        return redirect('/books');
    }

    public function destroy()
    {
        //TODO: Ask user are they sure before delete
        App::get('db')->delete('books', $_GET);

        return redirect('/books');
    }
}

