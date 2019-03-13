<?php
namespace App\Model\FitnessBand;

use Illuminate\Database\Eloquent\Model;

class Display extends Model{
    
    protected $table='fitness_band_displays';
    protected $fillable = [
        'refresh_rate',
        'maximum_resolution',
        'native_resolution',
        'response_time',
        'display_type'
    ];
}

?>