<?php namespace Square1\RealexLaravelWrapper;
 
use Realex\Realex;

class RealexLaravelWrapper
{
    public function __construct()
    {
        Realex::load([
            //mandatory: load will fail if not set
            'merchantId' => \Config::get('realex.merchant_id'),
            'secret' => \Config::get('realex.secret'),

            //optional: this 3 params will be set as default
            'endpoint' => \Config::get('realex.url'),
            //'userAgent' => 'laravelWrapper'
            //'hashAlgorithm' => 'sha1'
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

    public static function getMerchantId()
    {
        return Realex::getMerchantId();
    }

    public static function getSecret()
    {
        return Realex::getSecret();
    }

    public static function getHashAlgorithm()
    {
        return Realex::getHashAlgorithm();
    }
}
