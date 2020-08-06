<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;

class Review extends Model
{

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'user_id',
        'item_id',
        'title',
        'body',
        'stars',
        ];

        public function item()
        {
            return $this->belongsTo(Item::class, 'item_id','id');
        }

        public function user()
        {
            return $this->belongsTo(User::class, 'user_id');
        }
}
