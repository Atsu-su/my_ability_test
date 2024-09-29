<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Models\Category;
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

    public function confirm()
    {
        // $data = $request->all();
        // categoryを追加する
        $category = Category::find(1);
        $data = [
            'last_name' => 'さいとう',
            'first_name' => 'たかお',
            'gender' => '1',
            'email' => 'saito@example.com',
            'tel' => [
                '080',
                '1234',
                '5678'
            ],
            'address' => '東京都',
            'building' => 'ビル',
            'category_id' => '1',
            'category' => $category->content,
            'detail' => 'これが問い合わせたい内容です'
        ];
        session()->put('contact_form', $data);
        return view('contact.confirm', $data);
    }

    public function store(ContactFormRequest $request)
    {
        // 
    }
}
