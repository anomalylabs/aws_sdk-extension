<?php namespace Anomaly\AwsSdkExtension;

use Anomaly\Streams\Platform\Addon\Extension\Extension;

/**
 * Class AwsSdkExtension
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\AwsSdkExtension
 */
class AwsSdkExtension extends Extension
{

    /**
     * This extension simply loads the
     * AWS SDK for use in the Streams Platform.
     *
     * @var null
     */
    protected $provides = null;

}
