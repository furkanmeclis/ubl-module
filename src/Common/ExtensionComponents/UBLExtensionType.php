<?php

namespace FurkanMeclis\GIB\UBL\Common\ExtensionComponents;

/**
 * Class representing UBLExtensionType
 *
 * A single extension for private use.
 * XSD Type: UBLExtensionType
 */
class UBLExtensionType
{
    /**
     * The definition of the extension content.
     *
     * @var \FurkanMeclis\GIB\UBL\Common\ExtensionComponents\ExtensionContent $extensionContent
     */
    private $extensionContent = null;

    /**
     * Gets as extensionContent
     *
     * The definition of the extension content.
     *
     * @return \FurkanMeclis\GIB\UBL\Common\ExtensionComponents\ExtensionContent
     */
    public function getExtensionContent()
    {
        return $this->extensionContent;
    }

    /**
     * Sets a new extensionContent
     *
     * The definition of the extension content.
     *
     * @param \FurkanMeclis\GIB\UBL\Common\ExtensionComponents\ExtensionContent $extensionContent
     * @return self
     */
    public function setExtensionContent(\FurkanMeclis\GIB\UBL\Common\ExtensionComponents\ExtensionContent $extensionContent)
    {
        $this->extensionContent = $extensionContent;
        return $this;
    }
}

