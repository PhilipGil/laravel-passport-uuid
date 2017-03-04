<?php

namespace Laravel\Passport;


use Webpatser\Uuid\Uuid;
trait Uuids
{

    /**
     * Boot function from laravel.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $uuidKey = ($model->uuidKey) ? $model->uuidKey : $model->getKeyName();
            $model->{$uuidKey} = Uuid::generate()->string;
        });
    }
}