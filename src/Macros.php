<?php

namespace Techquity\CollectionMacros;

class Macros
{
    public function putBefore(): \Closure
    {
        return function($key, $value, $before) {
            $index = $this->keys()->search($before, true);
            return $this->take($index)->put($key, $value)->merge($this->take($index - $this->count()));
        };
    }

    public function putAfter(): \Closure
    {
        return function($key, $value, $after) {
            $index = $this->keys()->search($after, true);
            $index = $index !== false ? $index + 1 : $this->count();
            return $this->take($index)->put($key, $value)->merge($this->take($index - $this->count()));
        };
    }
}
