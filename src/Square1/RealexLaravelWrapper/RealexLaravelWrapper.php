<?php namespace Square1\RealexLaravelWrapper;
 
use Realex\Realex;

class RealexLaravelWrapper
{
    public function __construct()
    {
        Realex::load([
            'endpoint' => \Config::get('realex.url'),
            'merchantId' => \Config::get('realex.merchant_id'),
            'secret' => \Config::get('realex.secret'),
            'userAgent' => 'laravelWrapper'
        ]);
    }

    public static function getEndpoint()
    {
        return Realex::getEndpoint();
    }

    public static function getUserAgent()
    {
        return Realex::getUserAgent();
    }
}
