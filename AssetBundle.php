<?php
/**
 * AssetBundle.php
 * @author Dhiraj Gupta
 * @link http://traversient.com
 */

namespace traversient\yii\velocityjs;

/**
 * Class AssetBundle
 * @package dhiraj\yii\velocityjs
 */
class AssetBundle extends \yii\web\AssetBundle
{

    /**
     * @inherit
     */
    public $sourcePath = '@bower/velocity';

    /**
     * @inherit
     */
    public $css = [
    ];

    public $js = [
        'velocity.js',
    ];
    public $depends = [
    ];

}