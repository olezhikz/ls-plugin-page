<?php
/**
 * 
 * @author Oleg Demidov
 *
 */

/**
 * Запрещаем напрямую через браузер обращение к этому файлу.
 */
if (!class_exists('Plugin')) {
    die('Hacking attempt!');
}

class PluginWidjet extends Plugin
{
        
    protected $aInherits = [
        'template' => [
            'component.widjet.widjet' => '_components/widjet/widjet.tpl'
        ]
    ];
    public function Init()
    {
//        $this->Lang_AddLangJs([
//            'plugin.subscribe.subscribe.text.subscribe',
//            'plugin.subscribe.subscribe.text.unsubscribe'
//        ]);

//        $this->Component_Add('subscribe:subscribe');

//        $this->Viewer_AppendScript(Plugin::GetTemplatePath('subscribe'). '/assets/js/init.js');
    }

    public function Activate()
    {
        
        return true;
    }

    public function Deactivate()
    {
        
        return true;
    }
    
    public function Remove()
    {
        
        return true;
    }
}