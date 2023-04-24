<?php

namespace JobMetric\GlobalVariable;

use JobMetric\GlobalVariable\Object\Document;
use JobMetric\GlobalVariable\Object\Configuration;

class TranslationService
{
    /**
     * get instance document object
     *
     * @return Document
     */
    public function translation(): Document
    {
        return Document::getInstance();
    }

    /**
     * get instance config object
     *
     * @return Configuration
     */
    public function configuration(): Configuration
    {
        return Configuration::getInstance();
    }
}
