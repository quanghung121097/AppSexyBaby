<?php namespace SinKa\Sexybaby\Models;

use Model;

/**
 * Model
 */
class Vote extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'sinka_sexybaby_vote';
    public $belongsToMany =[
        'user_vote' => 'SinKa\Sexybaby\Models\User_vote'
    ];
    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
