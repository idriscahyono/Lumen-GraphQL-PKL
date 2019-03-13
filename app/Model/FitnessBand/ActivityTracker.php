<?php
namespace App\Model\FitnessBand;

use Illuminate\Database\Eloquent\Model;

class ActivityTracker extends Model{

    protected $table='fitness_band_activity_tracker';
    protected $fillable = [
        'calories_intake_burned',
        'activity_inactivity',
        'distance',
        'sleep_quality',
        'active_minutes',
        'heart_rate',
        'steps',
        'hours_slept',
    ];
}

?>