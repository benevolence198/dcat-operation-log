<?php

namespace Benevolences\DcatOperationLog;

use Dcat\Admin\Extend\ServiceProvider;
use Benevolences\DcatOperationLog\Http\Middleware\LogOperation;

class OperationLogServiceProvider extends ServiceProvider
{
    protected $middleware = [
        'middle' => [
            LogOperation::class,
        ],
    ];

    protected $menu = [
        [
            'title' => 'Operation Log',
            'uri'   => 'auth/operation-logs',
        ],
    ];

    public function settingForm()
    {
        return new Setting($this);
    }
}
