<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;
    //untuk memberitahu mana yg boleh disi
    // protected $fillable =['title','excerpt','body'];
    //untuk menjaga tidak diisi
    protected $guarded =['id'];

    
}
