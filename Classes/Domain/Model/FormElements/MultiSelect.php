<?php

declare(strict_types=1);


namespace WapplerSystems\FormExtended\Domain\Model\FormElements;

use TYPO3\CMS\Form\Domain\Model\FormElements\AbstractFormElement;

/**
 *
 * Scope: frontend
 */
class MultiSelect extends AbstractFormElement
{
    /**
     * @internal
     */
    public function initializeFormElement()
    {
        parent::initializeFormElement();
    }


    public function getJavaScriptIdentifier()
    {
        return str_replace('-', '_', $this->getIdentifier());
    }

}
