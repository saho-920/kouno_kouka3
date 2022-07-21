<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use illiminate\Database\Eloquent\Builder;


class Book extends Model
{
    protected $guarded = array('id');

    // ルールの定義
    public static $rules = array(
       'date' => 'required',
       'debit' => 'nullable',
       'd_money' => 'nullable',
       'credit' => 'nullable',
       'c_money' => 'nullable',
    );

    // getData
    public function getData(){
        return $this->name.$this->date.$this->debit.$this->d_money.$this->credit.$this->c_money;
    }
}
