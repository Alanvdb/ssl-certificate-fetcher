<?php declare(strict_types=1);

namespace AlanVdb\SslCertificateFetcher\Factory;

use AlanVdb\SslCertificateFetcher\Definition\SslCertificateFetcherFactoryInterface;
use AlanVdb\SslCertificateFetcher\Definition\SslCertificateFetcherInterface;
use AlanVdb\SslCertificateFetcher\SslCertificateFetcher;

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
