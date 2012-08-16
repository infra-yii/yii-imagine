yii-imagine
===========

Wrapper around the Imagine lib to use it as a yii component. 

More about Imagine:
- https://github.com/avalanche123/Imagine/
- http://imagine.readthedocs.org

Installation
============

```
git submodule add git://github.com/alari/yii-imagine.git protected/extensions/imagine


+Components
        'imagine' => array(
            'class' => "ext.imagine.ImagineYii",
            //'driver' => 'gd2'
        )
```