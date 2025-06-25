<?php

namespace FurkanMeclis\GIB\UBL;

use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\BaseTypesHandler;
use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\XmlSchemaDateHandler;
use JMS\Serializer\Handler\HandlerRegistry;
use JMS\Serializer\SerializerBuilder;
use Symfony\Component\Yaml\Yaml;
use DOMDocument;
use JMS\Serializer\SerializerInterface;

class UblManager
{
    private SerializerInterface $serializer;

    public function __construct()
    {
        $builder = SerializerBuilder::create();

        $config = Yaml::parseFile(__DIR__ . '/../xsd2php.yml');
        $metadataDirs = [];
        if (isset($config['xsd2php']['destinations_jms'])) {
            foreach ($config['xsd2php']['destinations_jms'] as $namespace => $dir) {
                $metadataDirs[$namespace] = __DIR__ . '/../' . $dir;
            }
        }

        $builder->setMetadataDirs($metadataDirs);

        // Gerekli tiplerin doğru işlenmesi için handler'ları kaydediyoruz.
        $builder->configureHandlers(function (HandlerRegistry $handler) {
            $handler->registerSubscribingHandler(new BaseTypesHandler());
            $handler->registerSubscribingHandler(new XmlSchemaDateHandler());
        });

        $this->serializer = $builder->build();
    }

    /**
     * UBL-TR nesnesini XML'e dönüştürür.
     * @param object $object (InvoiceType, CreditNoteType, vb.)
     * @return string
     */
    public function toXml($object): string
    {
        $xml = $this->serializer->serialize($object, 'xml');

        $dom = new DOMDocument('1.0');
        $dom->preserveWhiteSpace = false;
        $dom->formatOutput = true;
        $dom->loadXML($xml);

        return $dom->saveXML();
    }

    /**
     * UBL-TR XML'ini nesneye dönüştürür.
     * @param string $xml
     * @param string $type (UblTr\Invoice\InvoiceType::class, vb.)
     * @return object
     */
    public function fromXml(string $xml, string $type): object
    {
        return $this->serializer->deserialize($xml, $type, 'xml');
    }

    /**
     * UBL-TR nesnesini JSON'a dönüştürür.
     * @param object $object
     * @return string
     */
    public function toJson($object): string
    {
        return $this->serializer->serialize($object, 'json');
    }
}
