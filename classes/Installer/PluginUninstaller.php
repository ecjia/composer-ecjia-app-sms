<?php


namespace Ecjia\App\Sms\Installer;


use RC_DB;

class PluginUninstaller extends \Ecjia\Component\Plugin\Installer\PluginUninstaller
{

    public function uninstallByCode($code)
    {
        /* 从数据库中删除短信插件 */
        RC_DB::connection(config('cashier.database_connection', 'default'))->table('notification_channels')->where('channel_code', $code)->delete();
    }

}