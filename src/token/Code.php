<?php


namespace phpyan\phpoidc\op\token;


class Code
{
    public static function generate()
    {
        return md5(time());
    }
}