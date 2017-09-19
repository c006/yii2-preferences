<?php
namespace c006\preferences\assets;


use c006\preferences\models\Preferences;

class AppPrefs
{

    /**
     * @param $key
     * @return string
     */
    static public function getPreference($key)
    {

        $model = Preferences::find()
            ->where(['key' => $key])
            ->asArray()
            ->one();

        return (sizeof($model)) ? $model['value'] : FALSE;

    }


}