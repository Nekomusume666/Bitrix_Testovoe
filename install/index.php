<?php

use Bitrix\Main\Localization\Loc;
use Bitrix\Main\ModuleManager;

Loc::loadMessages(__FILE__);

class FAQModule extends CModule
{
    var $MODULE_ID = "FAQModule";
    var $MODULE_VERSION;
    var $MODULE_VERSION_DATE;
    var $MODULE_NAME;
    var $MODULE_DESCRIPTION;

    public function __construct()
    {
        $this->MODULE_NAME = "FAQ Module";
        $this->MODULE_DESCRIPTION = "Модуль добавляет компонент для отображения FAQ";
    }

    function DoInstall()
    {
        ModuleManager::registerModule($this->MODULE_ID);
		CopyDirFiles(__DIR__ . "/components", $_SERVER["DOCUMENT_ROOT"] . "/bitrix/components/FAQModule", true, true);
    }

    function DoUninstall()
    {
        ModuleManager::unRegisterModule($this->MODULE_ID);
        DeleteDirFilesEx("/bitrix/components/FAQModule/");
    }
}
