<?php


namespace Phpoidc\op;


class Code
{
    public static function generate()
    {
        return md5(time());
    }
}