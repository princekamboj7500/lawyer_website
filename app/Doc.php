<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doc extends Model
{
    //
    protected $table = "documents";
    public $timestamps = false;

    public function uploadedBy()
    {
      return $this->belongsTo(CustomUser::class, 'upload_by');
    }

}
