<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Professional extends Model
{
    //
	use Sortable;
	
	protected $fillable = ['lname'];
	
	public $sortable = ['lname', 'cert_year', 'discipline', 'country'];
}
