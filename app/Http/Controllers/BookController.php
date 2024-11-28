<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BookController
{
    public function index()
    {
        $data = DB::table('books')->get();
        return view('pages.book', compact('data'));
    }

    public function show_add_form()
    {
        return view('pages.add-book-form');
    }

    public function do_add(Request $request)
    {
        $filename = NULL;
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = $file->getClientOriginalName();
            $file->move('_uploads', $filename);
        }

        $query = DB::table('books')->insert([
            'title' => $request->input('title'),
            'Description' => $request->input('description'),
            'country_id' => $request->input('country_id'),
            'stock' => $request->input('stock'),
            'amount' => $request->input('amount'),
            'photo' => $filename,
        ]);

        if ($query) {
            return redirect('/book')->with('success', 'Add book successfully');
        }
    }

    // Deleting
    public function do_delete($id)
    {
        $book = DB::table('books')->where('id', $id)->first();
        if ($book && $book->photo && file_exists(public_path('_uploads/' . $book->photo))) {
            unlink(public_path('_uploads/' . $book->photo));
        }

        $query = DB::table('books')->where('id', $id)->delete();
        if ($query) {
            return redirect('/book')->with('success', 'Book deleted!');
        }
    }

    // Update form
    public function show_edit_form($id)
    {
        $data = DB::table('books')->where('id', $id)->get();
        return view('pages.edit-book-form', compact('data'));
    }

    // Updating
    public function do_update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'country_id' => 'required|integer',
            'stock' => 'required|integer',
            'amount' => 'required|numeric',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $book = DB::table('books')->where('id', $id)->first();

        if (!$book) {
            return redirect('/book')->with('error', 'Book not found!');
        }

        $data = [
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'country_id' => $request->input('country_id'),
            'stock' => $request->input('stock'),
            'amount' => $request->input('amount'),
            'updated_at' => now(),
        ];

        if ($request->hasFile('photo')) {
            if ($book->photo && file_exists(public_path('_uploads/' . $book->photo))) {
                unlink(public_path('_uploads/' . $book->photo));
            }

            $file = $request->file('photo');
            $filename = Str::random(20) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('_uploads'), $filename);

            $data['photo'] = $filename;
        }

        DB::table('books')->where('id', $id)->update($data);

        return redirect('/book')->with('success', 'Book updated successfully!');
    }
}
