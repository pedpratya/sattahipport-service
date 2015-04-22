<?php namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Ranklist extends Model {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'admin_ranklist';
        
        public function systemuser()
        {
            return $this->hasMany('App\Models\Admin\Systemuser');
        }
}
