<?php

namespace FurkanMeclis\GIB\UBL\DigitalSignature;

/**
 * Class representing DigestMethodType
 *
 *
 * XSD Type: DigestMethodType
 */
class DigestMethodType
{
    /**
     * @var string $algorithm
     */
    private $algorithm = null;

    /**
     * Gets as algorithm
     *
     * @return string
     */
    public function getAlgorithm()
    {
        return $this->algorithm;
    }

    /**
     * Sets a new algorithm
     *
     * @param string $algorithm
     * @return self
     */
    public function setAlgorithm($algorithm)
    {
        $this->algorithm = $algorithm;
        return $this;
    }
}

