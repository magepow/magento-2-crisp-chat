<?php

/**
 * @Author: Alex Dong
 * @Date:   2020-07-09 16:45:27
 * @Last Modified by:   nguyen
 * @Last Modified time: 2022-05-23 19:07:31
 */

namespace Magepow\Crispchat\Block;

class Crisp extends \Magento\Framework\View\Element\Template
{
    /**
     * @var \Magento\Customer\Model\Session
     */

    protected $customer;

    /**
     * Initialize dependencies.
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Magento\Customer\Model\Session $customer
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Customer\Model\Session $customer

    ) {
        $this->customer = $customer;
        parent::__construct($context, []);
    }

    public function getCustomer()
    {
        return $this->customer;
    }

}
