<?php declare(strict_types=1);

namespace AlanVdb\SslCertificateFetcher\Exception;

use AlanVdb\SslCertificateFetcher\Definition\SslCertificateFetcherExceptionInterface;
use RuntimeException;

class SslCertificateFetchException
    extends RuntimeException
    implements SslCertificateFetcherExceptionInterface
{}