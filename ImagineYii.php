<?php
/**
 * @author alari
 * @since 8/16/12 11:38 AM
 */
class ImagineYii extends CComponent
{
    public $driver = "gd2";

    /**
     * @return Imagine\Image\ImagineInterface
     */
    public function getImagine() {
        Yii::setPathOfAlias("Imagine", __DIR__."/Imagine/lib/Imagine");
        switch($this->driver) {
            case "gd2": return new Imagine\Gd\Imagine();
            case "imagick": return new Imagine\Imagick\Imagine();
            case "gmagick": return new Imagine\Gmagick\Imagine();
        }
    }
}
