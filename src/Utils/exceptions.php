<?php

namespace Netlte\Exceptions;

use Nette;

class InvalidArgumentException extends Nette\InvalidArgumentException {}

class InvalidStateException extends Nette\InvalidStateException {}

class BadRequestException extends Nette\Application\BadRequestException {}