<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;
    
    protected $fillable = ['category','description','user_id','amount'];
    
    public function creator()
    {
    	return $this->belongsTo(User::class, 'user_id');
    }

}
