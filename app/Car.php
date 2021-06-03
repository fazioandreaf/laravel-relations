<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
        protected $fillable=[
            'name',
            'model',
            'kW',
        ];
        public function pilots(){
            return $this -> belongsToMany(Pilot::class);
        }
        public function brand(){
            return $this -> belongsTo(Brand::class);
        }
}
