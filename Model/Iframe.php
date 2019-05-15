<?php

namespace BluePay\Payment\Model;

class Iframe extends \Magento\Payment\Model\Method\AbstractMethod
{
	/**
     * Payment method code
     */
    const CODE = 'bluepay_iframe_payment';
    protected $_code = self::CODE;
    protected $_isGateway = true;
    protected $_canOrder = true;
    protected $_canAuthorize = true;
    protected $_canCapture = true;
    protected $_canCapturePartial = true;
    protected $_canRefund = true;
    protected $_canRefundInvoicePartial = true;
    protected $_canVoid = true;
    protected $_canUseInternal = false;
    protected $_canFetchTransactionInfo = true;
    protected $_canReviewPayment = true;
    protected $_helperImage;
    protected $_checkoutSession;
    protected $_customerSession;
    protected $_orderFactory;
    protected $_urlBuilder;
    protected $_isInitializeNeeded = true;
	protected $_infoBlockType = 'BluePay\Payment\Block\Iframe\Info';

    public function capture(\Magento\Payment\Model\InfoInterface $payment, $amount)
    {
        //todo add functionality later
    }

    public function authorize(\Magento\Payment\Model\InfoInterface $payment, $amount)
    {
        //todo add functionality later
    }
}