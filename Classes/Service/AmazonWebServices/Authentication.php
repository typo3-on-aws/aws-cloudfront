<?php
declare(strict_types=1);
namespace T3rrific\AwsCloudfront\Service\AmazonWebServices;

/**
 * Amazon CloudFront Integration for TYPO3 CMS
 * @author Michael Schams | https://schams.net | https://t3rrific.com
 *
 * See README.md and/or LICENSE.txt for copyright and license information.
 */

use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 *
 */
class Authentication
{
    /**
     *
     */
    protected array $configuration;

    /**
     *
     */
    protected array $credentials;

    /**
     *
     */
    public function setCredentials(array $credentials): void
    {
        $this->configuration['credentials'] = $credentials;
    }

    /**
     *
     */
    public function getConfiguration(): array
    {
        return $this->configuration;
    }
}
