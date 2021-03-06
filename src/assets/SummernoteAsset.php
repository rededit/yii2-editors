<?php

/**
 * @copyright Copyright &copy; Kartik Visweswaran, Krajee.com, 2014 - 2019
 * @package yii2-editors
 * @version 1.0.0
 */

namespace kartik\editors\assets;

/**
 * Asset bundle for Summernote Widget.
 *
 * Uses summernote plugin library assets from Summernote CDN.
 *
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 * @since 1.0
 */
class SummernoteAsset extends BaseAsset
{
    /**
     * @inheritdoc
     */
    public $baseUrl = '//cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12';

    /**
     * @inheritdoc
     */
    public function init()
    {
        $asset = $this->isBs4() ? 'summernote-bs4' : 'summernote';
        $this->setupAssets('css', [$asset]);
        $this->setupAssets('js', [$asset]);
        parent::init();
    }

    /**
     * Sets language for the widget
     * @param string $lang the language code
     * @return $this
     */
    public function setLanguage($lang)
    {
        if (empty($lang) || substr($lang, 0, 2) == 'en') {
            return $this;
        }
        return $this->setAssetFile('js', "lang/summernote-{$lang}");
    }
}
