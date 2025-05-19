<?php

namespace App\Traits;

trait HasAttributes
{
    public function attributes()
    {
        return $this->hasMany(\App\Models\UserAttribute::class);
    }

    public function getAttributeByKey($key)
    {
        return $this->attributes()->where('key', $key)->first()?->value;
    }

    public function setAttributeByKey($key, $value)
    {
        $this->attributes()->updateOrCreate(
            ['key' => $key],
            ['value' => $value]
        );
    }
}
