<?php


namespace Netlte\Utils\UI;

use Nette\ComponentModel\Container;


/**
 * @author       Tomáš Holan <mail@tomasholan.eu>
 * @package      netlte/utils
 * @copyright    Copyright © 2019, Tomáš Holan [www.tomasholan.eu]
 */
class BaseContainer extends Container {

	/** @var string[] */
	private $hidden = [];

	public function hideComponent(string $name): self {
		if (!in_array($name, $this->hidden)) {
			$this->hidden[] = $name;
		}
		return $this;
	}

	public function showComponent(string $name): self {
		if (($key = array_search($name, $this->hidden)) !== false) {
			unset($this->hidden[$key]);
		}
		return $this;
	}

	public function render(): void {
		foreach ($this->getComponents() as $component) {
			if (!in_array($component->getName(), $this->hidden)) {
				continue;
			}
			$component->render();
		}
	}

}