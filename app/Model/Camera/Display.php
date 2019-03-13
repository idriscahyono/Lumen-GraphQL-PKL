<?php
namespace App\Model\Camera;

use Illuminate\Database\Eloquent\Model;

class Display extends Model{
    
    protected $fillable = [
        'refresh_rate',
        'maximum_resolution',
        'native_resolution',
        'response_time',
        'display_type'
    ];
}

?>