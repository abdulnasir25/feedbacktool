<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'category', 'user_id'];

    public const BUG_REPORT = 'Bug Report';
    public const FEATURE_REQUEST = 'Feature Request';
    public const IMPROVEMENT = 'Improvement';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }

    public function getCategoryAttribute($key)
    {
        $category = '';

        if ($key == 'bug_report') {
            $category = 'Bug Report';
        } elseif ($key == 'feature_request') {
            $category = 'Feature Request';
        } elseif ($key == 'improvement') {
            $category = 'Improvement';
        }

        return $category;
    }
}
