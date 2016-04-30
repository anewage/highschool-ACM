<?php
/**
 * Created by IntelliJ IDEA.
 * User: Amir
 * Date: 3/12/2016
 * Time: 7:48 AM
 */

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Record extends Eloquent
{

    /**
     * Record constructor.
     * @param array $attributes
     */
        public function __construct(array $attributes = null)
        {
            if ($attributes != null){
                $this->fillable = ['teamName', 'highschool', 'p1Name', 'p1Phone', 'p2Name', 'p2Phone', 'p3Name', 'p3Phone', 'coachName', 'coachMail', 'coachPhone' ];
            }
            $this->table = "registeredteams";
            parent::__construct($attributes);
        }

}