<?php

namespace Ecjia\App\Agent;

use Royalcms\Component\App\AppParentServiceProvider;

class AgentServiceProvider extends AppParentServiceProvider
{

    public function boot()
    {
        $this->package('ecjia/app-agent');
    }

    public function register()
    {

    }

}