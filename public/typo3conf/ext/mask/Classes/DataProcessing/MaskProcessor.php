<?php

declare(strict_types=1);

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

namespace MASK\Mask\DataProcessing;

use MASK\Mask\Helper\InlineHelper;
use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;
use TYPO3\CMS\Frontend\ContentObject\DataProcessorInterface;

class MaskProcessor implements DataProcessorInterface
{
    protected InlineHelper $inlineHelper;

    public function __construct(InlineHelper $inlineHelper)
    {
        $this->inlineHelper = $inlineHelper;
    }

    /**
     * Process data of a record to add files and inline elements of mask fields
     *
     * @param ContentObjectRenderer $cObj The data of the content element or page
     * @param array $contentObjectConfiguration The configuration of Content Object
     * @param array $processorConfiguration The configuration of this processor
     * @param array $processedData Key/value store of processed data (e.g. to be passed to a Fluid View)
     * @return array the processed data as key/value store
     */
    public function process(
        ContentObjectRenderer $cObj,
        array $contentObjectConfiguration,
        array $processorConfiguration,
        array $processedData
    ): array {
        $this->inlineHelper->addFilesToData($processedData['data']);
        $this->inlineHelper->addIrreToData($processedData['data']);
        return $processedData;
    }
}
