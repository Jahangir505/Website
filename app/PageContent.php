<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageContent extends Model{
    protected $primaryKey='pagecon_id';

    public function cateName(){
      return $this->belongsTo('App\PageContentCategory','pc_id','pc_id');
    }
}
