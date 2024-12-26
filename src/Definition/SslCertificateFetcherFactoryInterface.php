<?php declare(strict_types=1);

namespace AlanVdb\SslCertificateFetcher\Definition;

interface SslCertificateFetcherFactoryInterface
{
    /**
     * Creates and returns an instance of SslCertificateFetcherInterface.
     *
     * @return SslCertificateFetcherInterface The created SslCertificateFetcher instance.
     */
    public function createSslCertificateFetcher(): SslCertificateFetcherInterface;
}
