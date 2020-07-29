<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;

class Store extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = ['user_id','store_name','postal','address','tel','mail','business_hours','description',];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
