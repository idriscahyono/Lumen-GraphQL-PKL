<?php
namespace App\Model\FitnessBand;

use Illuminate\Database\Eloquent\Model;

class Sensor extends Model{
    
    protected $table='fitness_band_sensors';
    protected $fillable = [
        'accelerometer',
        'gps',
        'gyro'
    ];
}

?>