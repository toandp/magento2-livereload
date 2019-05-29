<?php

namespace TDPSoft\Livereload\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

class Head extends Template
{
    /**
     * Livereload Enabled config
     */
    const LIVERELOAD_ENABLED = 'dev/livereload/enable';

    /**
     * Livereload script URL config
     */
    const LIVERELOAD_SCRIPT_URL = 'dev/livereload/script_url';

    /**
     * Livereload script URL default config
     */
    const LIVERELOAD_DEFAULT_SCRIPT_URL = 'http://127.0.0.1:35729/livereload.js';

    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    protected $scopeConfig;

    /**
     * Constructor
     * 
     * @param \Magento\Framework\View\Element\Template\Context $context
     */
    public function __construct(Context $context, ScopeConfigInterface $scopeConfig)
	{
        parent::__construct($context);
        
        $this->scopeConfig = $scopeConfig;
    }

    /**
     * Return Livereload enabled status
     * 
     * @return string
     */
    public function isEnabled()
    {
        $status = $this->scopeConfig->getValue(
            self::LIVERELOAD_ENABLED,
            ScopeInterface::SCOPE_STORE
        );

        return (int) $status === 1;
    }
    
    /**
     * Return Livereload script URL
     * 
     * @return string
     */
    public function getScriptURL()
    {
        $script = $this->scopeConfig->getValue(
            self::LIVERELOAD_SCRIPT_URL,
            ScopeInterface::SCOPE_STORE
        );

        return isset($script) ? $script : self::LIVERELOAD_DEFAULT_SCRIPT_URL;
    }
}
