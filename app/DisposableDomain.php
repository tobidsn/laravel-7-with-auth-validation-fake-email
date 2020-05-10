<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DisposableDomain extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'disposable_email_domains';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'id', 'domain'];
}
