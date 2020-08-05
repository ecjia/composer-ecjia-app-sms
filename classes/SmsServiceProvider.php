<?php

namespace Ecjia\App\Sms;

use RC_Service;
use Royalcms\Component\App\AppParentServiceProvider;

class SmsServiceProvider extends  AppParentServiceProvider
{
    
    public function boot()
    {
        $this->package('ecjia/app-sms');
    }
    
    public function register()
    {
        $this->registerAppService();
    }

    protected function registerAppService()
    {
        RC_Service::addService('admin_purview', 'sms', 'Ecjia\App\Sms\Services\AdminPurviewService');
        RC_Service::addService('admin_menu', 'sms', 'Ecjia\App\Sms\Services\AdminMenuService');
        RC_Service::addService('plugin_menu', 'sms', 'Ecjia\App\Sms\Services\PluginMenuService');
        RC_Service::addService('plugin_install', 'sms', 'Ecjia\App\Sms\Services\PluginInstallService');
        RC_Service::addService('plugin_uninstall', 'sms', 'Ecjia\App\Sms\Services\PluginUninstallService');
        RC_Service::addService('sms_template', 'sms', 'Ecjia\App\Sms\Services\SmsTemplateService');
        RC_Service::addService('send_event_sms', 'sms', 'Ecjia\App\Sms\Services\SendEventSmsService');
    }
    
    
    
}