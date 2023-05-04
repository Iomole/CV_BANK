<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cvbanks extends Model
{

    //protected $fillable = ['name', 'focus', 'years', 'email', 'phone', 'staus', 'file'];
    use HasFactory;
    public function scopeFilter($query, array $filters){
        if($filters['search'] ?? false){
            $query->where('focus', 'like', '%'.request('focus').'%');

        }

        if($filters['search'] ?? false){
            $query->where('name', 'like', '%'.request('search').'%')
            -> orwhere('focus', 'like', '%'.request('search').'%')
            -> orwhere('years', 'like', '%'.request('search').'%')
            -> orwhere('status', 'like', '%'.request('search').'%');

        }

      
    }
}
