<?php

require_once './vendor/autoload.php';

use Ast\BinaryExpr\BinaryPlus;
use Ast\Expr;

$node = new BinaryPlus(new Expr(), new Expr());
var_dump(get_class($node));

