<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ExportCsvController extends Controller
{
    public function exportCsv()
    {
        $nameOrEmail = session('search.name_or_email');
        $gender = session('search.gender');
        $categoryId = session('search.category_id');
        $date = session('search.date');

        $data = Contact::with('category')->search($nameOrEmail, $gender, $categoryId, $date)
                                         ->select('id', 'last_name', 'first_name', 'email', 'category_id')
                                         ->get();

        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="exportData.csv"',
        ];

        $callback = function () use ($data){
            $file = fopen('php://output', 'w');
            $column = ['ID', '名前', 'メールアドレス', 'カテゴリ'];
            fputs($file, "\xEF\xBB\xBF");   // BOM付与
            fputcsv($file, $column);

            foreach ($data as $d) {
                fputcsv($file, [
                    $d->id,
                    $d->last_name . ' ' . $d->first_name,
                    $d->email,
                    $d->category->content,
                ]);
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
}
