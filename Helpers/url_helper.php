<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link https://basic-app.com
 */
use Config\App;
use BasicApp\UrlHelper\UrlHelper;

if (!function_exists('url'))
{
    function url(string $uri, array $params = [], string $scheme = null, App $alt = null)
    {
        return UrlHelper::createUrl($uri, $params, $scheme, $alt);
    }
}