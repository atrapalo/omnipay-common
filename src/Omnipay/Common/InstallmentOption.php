<?php

namespace Omnipay\Common;

/**
 * Installment option
 */
class InstallmentOption
{
    protected $id;
    protected $name;
    protected $code;
    protected $paymentMethod;
    protected $numberInstallments;

    /**
     * Create a new InstallmentOption
     *
     * @param string $id   The identifier of this installment option
     * @param string $name The name of this installment option
     * @param string $code The code of this installment option
     * @param string $paymentMethod The name of payment method for this installment option
     * @param string $numberInstallments The number of installment for this installment option
     */
    public function __construct($id, $name, $code, $paymentMethod, $numberInstallments)
    {
        $this->id = $id;
        $this->name = $name;
        $this->code = $code;
        $this->paymentMethod = $paymentMethod;
        $this->numberInstallments = $numberInstallments;
    }

    /**
     * The identifier of this installment method
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * The name of this installment method
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The code of this installment method
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * The name of payment method for this installment option
     *
     * @return string
     */
    public function getMethodPayment()
    {
        return $this->paymentMethod;
    }

    /**
     * The number of installment for this installment option
     *
     * @return string
     */
    public function getNumberInstallments()
    {
        return $this->numberInstallments;
    }
}
