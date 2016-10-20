<?php

namespace Omnipay\Common\Message;

/**
 * Fetch installment options response interface
 */
interface FetchInstallmentOptionsResponseInterface extends ResponseInterface
{
    /**
     * Get the returned list of installment options.
     *
     * These represent separate installment options which the user must choose between.
     *
     * @return \Omnipay\Common\InstallmentOption[]
     */
    public function getInstallmentOptions();
}
