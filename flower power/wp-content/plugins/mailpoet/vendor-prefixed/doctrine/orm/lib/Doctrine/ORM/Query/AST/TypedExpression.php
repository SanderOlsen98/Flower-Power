<?php
 namespace MailPoetVendor\Doctrine\ORM\Query\AST; if (!defined('ABSPATH')) exit; use MailPoetVendor\Doctrine\DBAL\Types\Type; interface TypedExpression { public function getReturnType() : Type; } 