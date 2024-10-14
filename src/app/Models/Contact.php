<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeSearch($query, $nameOrEmail, $gender, $categoryId, $date)
    {
        if (! empty($nameOrEmail)) {
            $query->where(function($query) use ($nameOrEmail) {
                $query->where('last_name', 'like', "%$nameOrEmail%")
                    ->orWhere('first_name', 'like', "%$nameOrEmail%")
                    ->orWhere('email', 'like', "%$nameOrEmail%");
            });
        }
        if (! empty($gender)) {
            $query->where('gender', $gender);
        }
        if (! empty($categoryId)) {
            $query->where('category_id', $categoryId);
        }
        if (! empty($date)) {
            $query->whereBetween('created_at', ["$date $startTime", "$date $endTime"]);
        }

        return $query;
    }
}
