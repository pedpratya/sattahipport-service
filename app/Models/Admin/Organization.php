<?php namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'admin_organization';

        public function eportsystem()
        {
            return $this->hasMany('App\Models\Admin\Eportsystem');
        }

        public function orgposition()
        {
            return $this->hasMany('App\Models\Admin\Orgposition');
        }
        
        public function department()
        {
            return $this->belongsTo('App\Models\Admin\Department');
        }        
}
