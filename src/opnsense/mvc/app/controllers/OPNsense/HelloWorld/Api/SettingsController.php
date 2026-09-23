<?php

namespace OPNsense\HelloWorld\Api;

use OPNsense\Base\ApiMutableModelControllerBase;

class SettingsController extends ApiMutableModelControllerBase
{
    protected static $internalModelName = 'helloworld';
    protected static $internalModelClass = '\OPNsense\HelloWorld\HelloWorld';
}