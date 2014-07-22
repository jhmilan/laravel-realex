<?php namespace Square1\RealexLaravelWrapper\Facades;
 
use Illuminate\Support\Facades\Facade;
 
class RealexLaravelWrapper extends Facade {
 
  /**
   * Get the registered name of the component.
   *
   * @return string
   */
  protected static function getFacadeAccessor() { return 'realexwrapper'; }
 
}