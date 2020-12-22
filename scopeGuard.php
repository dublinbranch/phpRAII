<?php

class ScopeGuard
{
    private $callMe;
    public $enabled = true;

    public function __construct($function)
    {
        $this->callMe = $function;
    }

    public function __destruct()
    {
        if ($this->enabled) {
            call_user_func( $this->callMe );
        }
    }
}
