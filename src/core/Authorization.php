<?php

namespace phpyan\phpoidc\op\core;

use phpyan\phpoidc\op\token\Code;

class Authorization
{
    public $code;

    private $redirectUrl;
    private $state;

    public function __construct($redirectUrl, $state, $code = '')
    {
        $this->redirectUrl = $redirectUrl;
        $this->state = $state;
        $this->code = $code ? $code : Code::generate();
    }

    public function redirect()
    {
        $query = strpos($this->redirectUrl, '&')!=='' ? "&" : "?";
        return $this->redirectUrl."{$query}code={$this->code}&state={$this->state}";
    }
}