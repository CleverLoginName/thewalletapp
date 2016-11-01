<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionType extends Model
{
    public function transactionCategories()
    {
        return $this->hasMany('App\TransactionCategory');
    }
}
