<?php

/**
 * Amazon CloudFront
 * @author Michael Schams | https://schams.net | https://t3rrific.com
 */

return [
   'module-cloudfront' => [
       'provider' => \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
       'source' => 'EXT:aws_cloudfront/Resources/Public/Icons/Extension.svg'
   ],
   'toolbar-cloudfront' => [
       'provider' => \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
       'source' => 'EXT:aws_cloudfront/Resources/Public/Icons/toolbar.svg'
   ],
   'button-bar-cloudfront' => [
       'provider' => \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
       'source' => 'EXT:aws_cloudfront/Resources/Public/Icons/button-bar.svg'
   ]
];
