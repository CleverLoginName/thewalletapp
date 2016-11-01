<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionCategory extends Model
{
    public function transactions()
    {
        return $this->hasMany('App\Transaction');
    }

    public function transactionType()
    {
        return $this->belongsTo('App\TransactionType');
    }
}
