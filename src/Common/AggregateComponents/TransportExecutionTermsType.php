<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing TransportExecutionTermsType
 *
 *
 * XSD Type: TransportExecutionTermsType
 */
class TransportExecutionTermsType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TransportUserSpecialTerms[] $transportUserSpecialTerms
     */
    private $transportUserSpecialTerms = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TransportServiceProviderSpecialTerms[] $transportServiceProviderSpecialTerms
     */
    private $transportServiceProviderSpecialTerms = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ChangeConditions[] $changeConditions
     */
    private $changeConditions = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PaymentTerms[] $paymentTerms
     */
    private $paymentTerms = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DeliveryTerms[] $deliveryTerms
     */
    private $deliveryTerms = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\BonusPaymentTerms $bonusPaymentTerms
     */
    private $bonusPaymentTerms = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\CommissionPaymentTerms $commissionPaymentTerms
     */
    private $commissionPaymentTerms = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PenaltyPaymentTerms $penaltyPaymentTerms
     */
    private $penaltyPaymentTerms = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EnvironmentalEmission[] $environmentalEmission
     */
    private $environmentalEmission = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\NotificationRequirement[] $notificationRequirement
     */
    private $notificationRequirement = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ServiceChargePaymentTerms $serviceChargePaymentTerms
     */
    private $serviceChargePaymentTerms = null;

    /**
     * Adds as transportUserSpecialTerms
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TransportUserSpecialTerms $transportUserSpecialTerms
     */
    public function addToTransportUserSpecialTerms(\FurkanMeclis\GIB\UBL\Common\BasicComponents\TransportUserSpecialTerms $transportUserSpecialTerms)
    {
        $this->transportUserSpecialTerms[] = $transportUserSpecialTerms;
        return $this;
    }

    /**
     * isset transportUserSpecialTerms
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTransportUserSpecialTerms($index)
    {
        return isset($this->transportUserSpecialTerms[$index]);
    }

    /**
     * unset transportUserSpecialTerms
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTransportUserSpecialTerms($index)
    {
        unset($this->transportUserSpecialTerms[$index]);
    }

    /**
     * Gets as transportUserSpecialTerms
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\TransportUserSpecialTerms[]
     */
    public function getTransportUserSpecialTerms()
    {
        return $this->transportUserSpecialTerms;
    }

    /**
     * Sets a new transportUserSpecialTerms
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TransportUserSpecialTerms[] $transportUserSpecialTerms
     * @return self
     */
    public function setTransportUserSpecialTerms(?array $transportUserSpecialTerms = null)
    {
        $this->transportUserSpecialTerms = $transportUserSpecialTerms;
        return $this;
    }

    /**
     * Adds as transportServiceProviderSpecialTerms
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TransportServiceProviderSpecialTerms $transportServiceProviderSpecialTerms
     */
    public function addToTransportServiceProviderSpecialTerms(\FurkanMeclis\GIB\UBL\Common\BasicComponents\TransportServiceProviderSpecialTerms $transportServiceProviderSpecialTerms)
    {
        $this->transportServiceProviderSpecialTerms[] = $transportServiceProviderSpecialTerms;
        return $this;
    }

    /**
     * isset transportServiceProviderSpecialTerms
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTransportServiceProviderSpecialTerms($index)
    {
        return isset($this->transportServiceProviderSpecialTerms[$index]);
    }

    /**
     * unset transportServiceProviderSpecialTerms
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTransportServiceProviderSpecialTerms($index)
    {
        unset($this->transportServiceProviderSpecialTerms[$index]);
    }

    /**
     * Gets as transportServiceProviderSpecialTerms
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\TransportServiceProviderSpecialTerms[]
     */
    public function getTransportServiceProviderSpecialTerms()
    {
        return $this->transportServiceProviderSpecialTerms;
    }

    /**
     * Sets a new transportServiceProviderSpecialTerms
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TransportServiceProviderSpecialTerms[] $transportServiceProviderSpecialTerms
     * @return self
     */
    public function setTransportServiceProviderSpecialTerms(?array $transportServiceProviderSpecialTerms = null)
    {
        $this->transportServiceProviderSpecialTerms = $transportServiceProviderSpecialTerms;
        return $this;
    }

    /**
     * Adds as changeConditions
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ChangeConditions $changeConditions
     */
    public function addToChangeConditions(\FurkanMeclis\GIB\UBL\Common\BasicComponents\ChangeConditions $changeConditions)
    {
        $this->changeConditions[] = $changeConditions;
        return $this;
    }

    /**
     * isset changeConditions
     *
     * @param int|string $index
     * @return bool
     */
    public function issetChangeConditions($index)
    {
        return isset($this->changeConditions[$index]);
    }

    /**
     * unset changeConditions
     *
     * @param int|string $index
     * @return void
     */
    public function unsetChangeConditions($index)
    {
        unset($this->changeConditions[$index]);
    }

    /**
     * Gets as changeConditions
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ChangeConditions[]
     */
    public function getChangeConditions()
    {
        return $this->changeConditions;
    }

    /**
     * Sets a new changeConditions
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ChangeConditions[] $changeConditions
     * @return self
     */
    public function setChangeConditions(?array $changeConditions = null)
    {
        $this->changeConditions = $changeConditions;
        return $this;
    }

    /**
     * Adds as paymentTerms
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PaymentTerms $paymentTerms
     */
    public function addToPaymentTerms(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\PaymentTerms $paymentTerms)
    {
        $this->paymentTerms[] = $paymentTerms;
        return $this;
    }

    /**
     * isset paymentTerms
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentTerms($index)
    {
        return isset($this->paymentTerms[$index]);
    }

    /**
     * unset paymentTerms
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentTerms($index)
    {
        unset($this->paymentTerms[$index]);
    }

    /**
     * Gets as paymentTerms
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PaymentTerms[]
     */
    public function getPaymentTerms()
    {
        return $this->paymentTerms;
    }

    /**
     * Sets a new paymentTerms
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PaymentTerms[] $paymentTerms
     * @return self
     */
    public function setPaymentTerms(?array $paymentTerms = null)
    {
        $this->paymentTerms = $paymentTerms;
        return $this;
    }

    /**
     * Adds as deliveryTerms
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DeliveryTerms $deliveryTerms
     */
    public function addToDeliveryTerms(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\DeliveryTerms $deliveryTerms)
    {
        $this->deliveryTerms[] = $deliveryTerms;
        return $this;
    }

    /**
     * isset deliveryTerms
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDeliveryTerms($index)
    {
        return isset($this->deliveryTerms[$index]);
    }

    /**
     * unset deliveryTerms
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDeliveryTerms($index)
    {
        unset($this->deliveryTerms[$index]);
    }

    /**
     * Gets as deliveryTerms
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DeliveryTerms[]
     */
    public function getDeliveryTerms()
    {
        return $this->deliveryTerms;
    }

    /**
     * Sets a new deliveryTerms
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DeliveryTerms[] $deliveryTerms
     * @return self
     */
    public function setDeliveryTerms(?array $deliveryTerms = null)
    {
        $this->deliveryTerms = $deliveryTerms;
        return $this;
    }

    /**
     * Gets as bonusPaymentTerms
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\BonusPaymentTerms
     */
    public function getBonusPaymentTerms()
    {
        return $this->bonusPaymentTerms;
    }

    /**
     * Sets a new bonusPaymentTerms
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\BonusPaymentTerms $bonusPaymentTerms
     * @return self
     */
    public function setBonusPaymentTerms(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\BonusPaymentTerms $bonusPaymentTerms = null)
    {
        $this->bonusPaymentTerms = $bonusPaymentTerms;
        return $this;
    }

    /**
     * Gets as commissionPaymentTerms
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\CommissionPaymentTerms
     */
    public function getCommissionPaymentTerms()
    {
        return $this->commissionPaymentTerms;
    }

    /**
     * Sets a new commissionPaymentTerms
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\CommissionPaymentTerms $commissionPaymentTerms
     * @return self
     */
    public function setCommissionPaymentTerms(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\CommissionPaymentTerms $commissionPaymentTerms = null)
    {
        $this->commissionPaymentTerms = $commissionPaymentTerms;
        return $this;
    }

    /**
     * Gets as penaltyPaymentTerms
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PenaltyPaymentTerms
     */
    public function getPenaltyPaymentTerms()
    {
        return $this->penaltyPaymentTerms;
    }

    /**
     * Sets a new penaltyPaymentTerms
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PenaltyPaymentTerms $penaltyPaymentTerms
     * @return self
     */
    public function setPenaltyPaymentTerms(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\PenaltyPaymentTerms $penaltyPaymentTerms = null)
    {
        $this->penaltyPaymentTerms = $penaltyPaymentTerms;
        return $this;
    }

    /**
     * Adds as environmentalEmission
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EnvironmentalEmission $environmentalEmission
     */
    public function addToEnvironmentalEmission(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\EnvironmentalEmission $environmentalEmission)
    {
        $this->environmentalEmission[] = $environmentalEmission;
        return $this;
    }

    /**
     * isset environmentalEmission
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEnvironmentalEmission($index)
    {
        return isset($this->environmentalEmission[$index]);
    }

    /**
     * unset environmentalEmission
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEnvironmentalEmission($index)
    {
        unset($this->environmentalEmission[$index]);
    }

    /**
     * Gets as environmentalEmission
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EnvironmentalEmission[]
     */
    public function getEnvironmentalEmission()
    {
        return $this->environmentalEmission;
    }

    /**
     * Sets a new environmentalEmission
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EnvironmentalEmission[] $environmentalEmission
     * @return self
     */
    public function setEnvironmentalEmission(?array $environmentalEmission = null)
    {
        $this->environmentalEmission = $environmentalEmission;
        return $this;
    }

    /**
     * Adds as notificationRequirement
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\NotificationRequirement $notificationRequirement
     */
    public function addToNotificationRequirement(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\NotificationRequirement $notificationRequirement)
    {
        $this->notificationRequirement[] = $notificationRequirement;
        return $this;
    }

    /**
     * isset notificationRequirement
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNotificationRequirement($index)
    {
        return isset($this->notificationRequirement[$index]);
    }

    /**
     * unset notificationRequirement
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNotificationRequirement($index)
    {
        unset($this->notificationRequirement[$index]);
    }

    /**
     * Gets as notificationRequirement
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\NotificationRequirement[]
     */
    public function getNotificationRequirement()
    {
        return $this->notificationRequirement;
    }

    /**
     * Sets a new notificationRequirement
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\NotificationRequirement[] $notificationRequirement
     * @return self
     */
    public function setNotificationRequirement(?array $notificationRequirement = null)
    {
        $this->notificationRequirement = $notificationRequirement;
        return $this;
    }

    /**
     * Gets as serviceChargePaymentTerms
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ServiceChargePaymentTerms
     */
    public function getServiceChargePaymentTerms()
    {
        return $this->serviceChargePaymentTerms;
    }

    /**
     * Sets a new serviceChargePaymentTerms
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ServiceChargePaymentTerms $serviceChargePaymentTerms
     * @return self
     */
    public function setServiceChargePaymentTerms(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ServiceChargePaymentTerms $serviceChargePaymentTerms = null)
    {
        $this->serviceChargePaymentTerms = $serviceChargePaymentTerms;
        return $this;
    }
}

