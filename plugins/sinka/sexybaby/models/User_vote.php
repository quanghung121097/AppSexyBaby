<?php namespace SinKa\Sexybaby\Models;
use Model;

/**
 * Model
 */
class User_vote extends Model
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
    public $table = 'sinka_sexybaby_user_vote';
    public $belongsTo = [
        'user' => 'RainLab\User\Models\User'
    ];
    public $belongsToMany =[
        'vote' => 'SinKa\Sexybaby\Models\Vote'
    ];
    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
