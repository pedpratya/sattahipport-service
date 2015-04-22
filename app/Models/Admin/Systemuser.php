<?php namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Systemuser extends Model {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'admin_systemuser';
        
        public function ranklist()
        {
            return $this->belongsTo('App\Models\Admin\Ranklist');
        }
        
        public function organization()
        {
            return $this->belongsTo('App\Models\Admin\Organization');
        }
}
