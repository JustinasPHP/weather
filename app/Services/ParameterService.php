<?php

declare(strict_types=1);

namespace App\Services;


use App\Parameter;

/**
 * Class ParameterService
 * @package App\Services
 */
class ParameterService
{
    /**
     * @param string $key
     * @param null $value
     * @return Parameter
     */
    public function setValue(string $key, $value = null): void
    {
        Parameter::updateOrCreate(
            ['key' => $key],
            ['value' => $value]
        );
    }

    /**
     * @param string $key
     * @return null|string
     */
    public function getValue(string $key): ?string
    {
        $parameter = Parameter::where('key', $key)->first();
        if($parameter) {
            return $parameter->value;
        }
        return null;
    }
}
