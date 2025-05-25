<?php declare(strict_types=1);

namespace AlanVdb\Http\Factory;

use AlanVdb\Http\Definition\SslCertificateFetcherFactoryInterface;
use AlanVdb\Http\Definition\SslCertificateFetcherInterface;
use AlanVdb\Http\SslCertificateFetcher;

class SslCertificateFetcherFactory implements SslCertificateFetcherFactoryInterface
{
    /**
     * Creates and returns an instance of SslCertificateFetcherInterface.
     *
     * @return SslCertificateFetcherInterface The created SslCertificateFetcher instance.
     */
    public function createSslCertificateFetcher(): SslCertificateFetcherInterface
    {
        return new SslCertificateFetcher();
    }
}
