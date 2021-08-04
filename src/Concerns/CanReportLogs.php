<?php

namespace RannieOllit\GoogleStackDriver\Concerns;

use Google\Cloud\ErrorReporting\Bootstrap;

trait CanReportLogs
{
  public function logIntoStackDriver($exception)
  {
     if (isset($_SERVER['GAE_SERVICE'])) {
        Bootstrap::init();
        Bootstrap::exceptionHandler($exception);
    }
  }
}
