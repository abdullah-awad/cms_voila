<?php

namespace Imanghafoori\HeyMan\Plugins\WatchingStrategies\EloquentModels;

class EloquentEventsListener
{
    public function startWatching($data)
    {
        foreach ($data as $model => $f) {
            foreach ($f as $event => $callbacks) {
                foreach ($callbacks as $cb) {
                    $model::{$event}($cb);
                }
            }
        }
    }
}
