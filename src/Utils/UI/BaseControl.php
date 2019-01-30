<?php

namespace Netlte\Utils\UI;

use Nette\Application\UI\Control;
use Nette\Bridges\ApplicationLatte\Template;
use Nette\Localization\ITranslator;

/**
 * @author       Tomáš Holan <mail@tomasholan.eu>
 * @package      netlte/utils
 * @copyright    Copyright © 2019, Tomáš Holan [www.tomasholan.eu]
 *
 * @property-read Template|\stdClass $template
 * @method Template|\stdClass getTemplate()
 */
abstract class BaseControl extends Control{

	/** @var ITranslator|null */
	private $translator = null;

	/** @var string|null */
	private $templateFile = null;

	public function setTranslator(ITranslator $translator = null): self {
		$this->translator = $translator;
		return $this;
	}

	public function getTranslator(): ?ITranslator {
		return $this->translator;
	}

	public function getTemplateFile(): ?string {
		return $this->templateFile;
	}

	public function setTemplateFile(?string $templateFile): self {
		$this->templateFile = $templateFile;
		return $this;
	}
	
}