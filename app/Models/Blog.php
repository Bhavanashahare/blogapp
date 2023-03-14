<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Make;

class Blog extends Model
{
    use HasFactory;
   
//relation
    public function category(){
        return $this->hasOne(Make::class,'id','category_id');
    }
}
//(immp note.delete data from database(xannp) first delete then you got a result if you not delete the data you willnever get answer you get error)  )
