<?php

namespace panix\mod\presentation\forms;

use panix\engine\SettingsModel;

class SettingsForm extends SettingsModel {

    const NAME = 'hosting';

    protected $module = 'hosting';
    public static $category = 'hosting';

    public $auth_login;
    public $auth_token;
    public $account;

    public function rules() {
        return [
            [['auth_login', 'auth_token'], "required"],
            [['account'], 'string'],
        ];
    }

}
