<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $contacts = Contact::with('category')->paginate(7);

        return view('admin.index', compact('categories', 'contacts'));
    }

    public function search(Request $request)
    {
        $categories = Category::all();

        $startTime = '00:00:00';
        $endTime = '23:59:59';

        $data = $request->all();

        // postの場合とgetの場合で処理を分ける
        if ($request->isMethod('post')) {
            // postの場合は新しい検索条件になる
            session()->forget('search');

            $nameOrEmail = $request->input('name_or_email');
            $gender = $request->input('gender');
            $categoryId = $request->input('category_id');
            $date = $request->input('date');

            session()->put('search', [
                'name_or_email' => $nameOrEmail,
                'gender' => $gender,
                'category_id' => $categoryId,
                'date' => $date
            ]);

        } elseif ($request->isMethod('get')) {
            $nameOrEmail = session('search.name_or_email');
            $gender = session('search.gender');
            $categoryId = session('search.category_id');
            $date = session('search.date');
        }

        $query = Contact::with('category')->search($nameOrEmail, $gender, $categoryId, $date);

        $contacts = $query->paginate(7);

        session()->put('search', [
            'name_or_email' => $nameOrEmail,
            'gender' => $gender,
            'category_id' => $categoryId,
            'date' => $date
        ]);

        return view('admin.index', compact('categories', 'contacts', 'data'));
    }

    public function reset()
    {
        // 検索条件のリセット
        session()->forget('search');

        return redirect()->route('admin.index');
    }
}
