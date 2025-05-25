<?php declare(strict_types=1);

namespace AlanVdb\Http\Exception;

use AlanVdb\Http\Definition\SslExceptionInterface;

class RuntimeException
    extends \RuntimeException
    implements SslExceptionInterface
{}