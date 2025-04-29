<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories'; // اسم الجدول في قاعدة البيانات
    protected $fillable = ['name', 'description']; // الحقول القابلة للتعبئة
    public $timestamps = true; // إذا كنت تستخدم التواريخ التلقائية
}
