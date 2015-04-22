<?php namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Workflow extends Model {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'admin_workflow';
          
        public function pagemanagement()
        {
            return $this->hasMany('App\Models\Admin\Pagemanagement');
        }
}
