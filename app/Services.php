<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    //
      protected $primaryKey = "id"; //primary key;
    protected $fillable = [
        'services_type',
        'services_date',
        'services_time_from',
        'services_time_to',
        'service_overshoot_time',
        'service_opening_quality',
        'testimony_officer',
        'testimony_number',
        'testimony_healing_type',
        'devotional_officer',
        'devotional_time',
        'praise_overshoot_time',
        'praise_quality_time',
        'choir',
        'choir_overshoot_time',
        'choir_quality_dressing',
        'choir_general_look',
        'word_pastor',
        'word_overshoot_time',
        'soul_word',
        'first_timer',
        'first_gender_male',
        'first_gender_female',
        'first_gender_children',
        'first_timer_age',
        'quality_reception',
        'status'
    ];

    // public function user(){
    //     return $this->belongsTo('App\User');
    // }
}
