<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Make;
use Illuminate\Database\Eloquent\SoftDeletes;
class Blog extends Model
{
    use HasFactory;
    use SoftDeletes;
//relation
    public function category(){
        return $this->hasOne(Make::class,'id','category_id');
    }
}
//(immp note.delete data from database(xannp) first delete then you got a result if you not delete the data you willnever get answer you get error)  )
