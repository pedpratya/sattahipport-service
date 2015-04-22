<?php namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Orgposition extends Model {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'admin_orgposition';
        
        public function organization()
        {
            return $this->belongsTo('App\Models\Admin\Organization');
        }
 
        public function systemuser()
        {
            return $this->hasMany('App\Models\Admin\Systemuser');
        }       
}
