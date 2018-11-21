<?php

namespace App;

use App\Events\ParameterSavedEvent;
use App\Events\ParameterSavingEvent;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Parameter
 * @property string $key
 * @property string|null $value
 * @package App
 */
class Parameter extends Model
{
    const PARAMETER_WIND_SPEED = 'wind_speed';
    /**
     * @var array
     */
    protected $fillable = [
        'key',
        'value'
    ];
    // Jei yra observe class užregistruota, tai šių galime ir neregistruoti
//    protected  $dispatchesEvents = [
//        'saving' => ParameterSavingEvent::class,
//        'saved' => ParameterSavedEvent::class
//    ];
}
