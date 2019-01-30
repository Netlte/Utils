<?php


namespace Netlte\Utils\UI;

use Nette\Utils\Html;


/**
 * @author       Tomáš Holan <mail@tomasholan.eu>
 * @package      netlte/utils
 * @copyright    Copyright © 2019, Tomáš Holan [www.tomasholan.eu]
 */
class HtmlWrapper extends BaseContainer {

	/** @var Html|null */
	private $wrapper;
	
	public function __construct(Html $wrapper = null) {
		$this->wrapper = $wrapper;
	}
	
	public function getWrapper(): ?Html {
		return $this->wrapper;
	}
	
	public function setWrapper(Html $wrapper = null): self {
		$this->wrapper = $wrapper;
		return $this;
	}

	public function render(): void {
		if ($this->wrapper) {
			echo $this->wrapper->startTag();
		}

		parent::render();

		if ($this->wrapper) {
			echo $this->wrapper->endTag();
		}
	}

}