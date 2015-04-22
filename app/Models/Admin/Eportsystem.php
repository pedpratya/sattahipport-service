<?php namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Eportsystem extends Model {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'admin_eportsystem';

        public function organization()
        {
            return $this->belongsTo('App\Models\Admin\Organization');
        }
}
