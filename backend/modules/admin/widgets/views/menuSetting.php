<?php

/**
 *
 * @author Ivan Teleshun <teleshun.ivan@gmail.com>
 * @link http://www.molotoksoftware.com/
 * @copyright 2016 MolotokSoftware
 * @license GNU General Public License, version 3
 */

/**
 * 
 * This file is part of MolotokSoftware.
 *
 * MolotokSoftware is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * MolotokSoftware is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.

 * You should have received a copy of the GNU General Public License
 * along with MolotokSoftware.  If not, see <http://www.gnu.org/licenses/>.
 */

 /*
 *Основное Common Settings
 *Тексты Privacy Policy
 *Настройки ПРО Site Usage Agreement
 */

$this->widget(
    'zii.widgets.CMenu',
    array(
        'items' => array(
            [
                'label' => 'Common Settings',
                'url'   => ['/admin/settings/common'],
              //  'itemOptions' => array('class' => Yii::app()->controller->action->id=='page'?'active':'')
            ],

            [
                'label'=>Yii::t('common', 'Localization'),
                'url'   => ['/admin/settings/localization'],
                //   'itemOptions' => array('class' => Yii::app()->controller->id=='reviews'?'active':'')
            ],

            [
                'label'=>'Privacy Policy',
                'url'   => ['/admin/settings/pagesPro'],
             //   'itemOptions' => array('class' => Yii::app()->controller->id=='reviews'?'active':'')
            ],

            [
                'label' => 'Site Usage Agreement',
                'url'   => ['/admin/settings/settingsPro'],
             //   'itemOptions' => array('class' => Yii::app()->controller->action->id=='about_me'?'active':'')
            ],

        ),
        'encodeLabel' => false,
        'itemTemplate' => '{menu}',

        'htmlOptions' => array(
            'class' => 'nav nav-tabs'
        ),
    )
);
?>