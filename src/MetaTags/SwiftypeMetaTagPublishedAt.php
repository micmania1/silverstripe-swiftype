<?php

namespace Ichaber\SSSwiftype\MetaTags;

/**
 * Class SwiftypeMetaTagPublishedAt
 *
 * @package Ichaber\SSSwiftype\MetaTags
 */
class SwiftypeMetaTagPublishedAt extends SwiftypeMetaTag
{
    /**
     * @var string
     */
    protected $name = 'published_at';

    /**
     * @var string
     */
    protected $fieldName = 'Created';

    /**
     * @var string
     */
    protected $fieldType = 'date';
}
