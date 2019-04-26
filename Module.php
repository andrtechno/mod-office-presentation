<?php

namespace panix\mod\presentation;

use Yii;
use panix\engine\WebModule;
use yii\base\BootstrapInterface;

class Module extends WebModule implements BootstrapInterface
{

    public $icon = 'edit';

    public function bootstrap($app)
    {
        $app->urlManager->addRules(
            [
                'presentation' => 'presentation/default/index',
                'presentation/example' => 'presentation/default/example',
                'presentation/upload' => 'presentation/default/upload',
                'presentation/search' => 'presentation/default/search',
            ],
            true
        );
    }

    public function afterUninstall()
    {
        //Удаляем таблицу модуля
        //Yii::$app->db->createCommand()->dropTable(Redirects::tableName());
        return parent::afterUninstall();
    }


    public function getAdminMenu()
    {
        return [
            'system' => [
                'items' => [
                    [
                        'label' => 'presentation',
                        'url' => ['/admin/presentation'],
                        'icon' => $this->icon,
                    ],
                ],
            ]
        ];
    }

}
