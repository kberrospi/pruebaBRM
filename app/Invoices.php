<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoices extends Model
{
    public function products(){
        return $this->hasMany("App\Items", "id_invoice");
    }
}
