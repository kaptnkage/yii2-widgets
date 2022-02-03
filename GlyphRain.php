<?php
namespace system\widgets;
use assets\GlyphRainAsset as assets;
    /**
     * Colors
     *
     * @return [red, green, blue]
     */
class GlyphRain extends \base\Widget {
	public $color;
	public function init(){
		parent::init();
		assets::register($this->getView());
		}
	public function run() {
		return $this->render('glyph-rain',['color' => $this->color]);
		}
  }
