<?php namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Department extends Model {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'admin_department';
        
        public function orgposition()
        {
            return $this->hasMany('App\Models\Admin\Orgposition');
        }
}
