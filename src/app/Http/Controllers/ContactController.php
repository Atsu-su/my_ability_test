<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Models\Category;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        if (session()->has('contact_form')) {
            $data = session()->get('contact_form');
            session()->forget('contact_form');
        } else {
            $data = null;
        }

        return view('contact.contact_form', compact('categories', 'data'));
    }

    public function confirm(ContactFormRequest $request)
    {
        $data = $request->all();
        $category = Category::find($request->input('category_id'));

        // sessionには$request->all()のみを入れる
        session()->put('contact_form', $data);
        $data['category'] = $category->content;

        return view('contact.confirm', $data);
    }

    public function store()
    {
        /* ----------------------------------------- */
        /* 【追加予定】try-catchを追加（例外）
        /* ----------------------------------------- */
        $data = session()->get('contact_form');
        $data['tel'] = implode('-', $data['tel']); // 配列を文字列に変換
        Contact::create($data);

        session()->forget('contact_form');

        return view('contact.thanks');
    }

    public function delete($id)
    {
        Contact::destroy($id);
        return redirect()->route('admin.index');
    }
}
