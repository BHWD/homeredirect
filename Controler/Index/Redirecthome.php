<?php
namespace iuk\homeredirect\Controller\Index;
class Redirecthome extends \Magento\Framework\App\Action\Action
{
    protected $resultForwardFactory;
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\Controller\Result\ForwardFactory $resultForwardFactory
    ) {
        $this->resultForwardFactory = $resultForwardFactory;
        parent::__construct($context);
    }

    public function execute($coreRoute = null)
    {
       $this->_redirect('customer/account/login');
                return;
    }
}