<?php namespace Square1\RealexLaravelWrapper;
 
use Realex\Realex;

class RealexLaravelWrapper
{
    public function __construct()
    {
        Realex::load([
            'merchantId'    => \Config::get('realex.merchant_id'),
            'secret'        => \Config::get('realex.secret'),
            'endpoint'      => \Config::get('realex.url', 'https://epage.payandshop.com/epage-remote.cgi'),
            'userAgent'     => \Config::get('realex.userAgent', 'laravelWrapper'),
            'hashAlgorithm' => \Config::get('realex.hashAlgorithm', 'sha1'),
            'adapter'       => \Config::get('realex.adapter', 'curl')
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

    public static function getAdapter()
    {
        return Realex::getAdapter();
    }

    public static function doSinglePayment($params = [])
    {
        //@TODO: maybe validate params
        return Realex::doSinglePayment($params);
    }
}
