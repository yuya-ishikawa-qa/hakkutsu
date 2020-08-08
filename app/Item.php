<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;

class Item extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = ['store_id','order_id','tax_id','item_name','status','stock','price','image_path','description',];

    public function store()
    {
        return $this -> belongsTo(Store::class);
    }

    /**
     * userに所属する役目を取得
     */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function reviews()
    {
        return $this -> hasMany(Review::class,'item_id', 'id');
    }
}
