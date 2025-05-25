<?php declare(strict_types=1);

namespace AlanVdb\Http\Definition;

interface SslCertificateFetcherFactoryInterface
{
    /**
     * Creates and returns an instance of SslCertificateFetcherInterface.
     *
     * @return SslCertificateFetcherInterface The created SslCertificateFetcher instance.
     */
    public function createSslCertificateFetcher(): SslCertificateFetcherInterface;
}
