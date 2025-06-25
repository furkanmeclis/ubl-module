# UBL-TR PHP Kütüphanesi

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)

Bu kütüphane, Türkiye Gelir İdaresi Başkanlığı (GİB) tarafından standartları belirlenmiş olan UBL-TR 1.2.1 formatındaki e-Fatura, e-Arşiv, e-İrsaliye gibi elektronik belgelerin PHP ortamında kolayca yönetilebilmesi için geliştirilmiştir. XML belgelerini PHP nesnelerine dönüştürme (deserialization) ve PHP nesnelerini XML formatına çevirme (serialization) işlemlerini `jms/serializer` ve `goetas-webservices/xsd2php` altyapısını kullanarak gerçekleştirir.

## Temel Özellikler

-   **Geniş Desteği:** Fatura, İrsaliye, Kredi Notu, İrsaliye Yanıtı ve Uygulama Yanıtı gibi tüm temel UBL-TR belgelerini destekler.
-   **Modern Altyapı:** PHP 8.1+ ve PSR-4 autoloading standartlarına uygundur.
-   **Esnek Yönetim:** `UblManager` sınıfı ile XML ve JSON işlemleri için basit bir arayüz sunar.
-   **Kolay Kurulum:** Composer ile projenize saniyeler içinde dahil edebilirsiniz.

---

## Kurulum

Bu paketi projenize Composer kullanarak ekleyebilirsiniz:

```bash
composer require furkanmeclis/uabala2a1a-pahapa-saearavaiacaea
```

---

## Kullanım

Kütüphanenin kullanımı oldukça basittir. Tüm işlemler `FurkanMeclis\GIB\UBL\UblManager` sınıfı üzerinden yürütülür.

### 1. UblManager Oluşturma

Öncelikle `UblManager` nesnesini oluşturmanız gerekir. Bu nesne, tüm serileştirme ve deserileştirme işlemlerini yönetir.

```php
require 'vendor/autoload.php';

use FurkanMeclis\GIB\UBL\UblManager;

// UblManager'ı projenizin ana dizinini vererek başlatın
// Bu, JMS meta verilerinin doğru yüklenmesi için gereklidir.
$projectRoot = __DIR__; // Projenizin kök dizini
$manager = new UblManager($projectRoot);
```

### 2. XML'den PHP Nesnesi Oluşturma (Deserialization)

Bir UBL-TR XML dosyasının içeriğini okuyup ilgili PHP nesnesine dönüştürebilirsiniz. Kütüphane, XML'in kök elementine bakarak doğru nesne tipini otomatik olarak algılar.

```php
// Örnek bir fatura XML içeriği
$xmlContent = file_get_contents('path/to/your/invoice.xml');

// XML içeriğini ve hedef sınıfı belirterek nesneye dönüştürün
// Not: Kök etikete göre sınıfı dinamik olarak seçebilirsiniz.
use FurkanMeclis\GIB\UBL\Invoice\InvoiceType;

$invoiceObject = $manager->fromXml($xmlContent, InvoiceType::class);

// Artık fatura verilerine nesne üzerinden erişebilirsiniz
echo "Fatura ID: " . $invoiceObject->getID()->getValue();
echo "Müşteri Adı: " . $invoiceObject->getAccountingCustomerParty()->getParty()->getPartyName()->getName()->getValue();
```

### 3. PHP Nesnesinden XML Oluşturma (Serialization)

Oluşturduğunuz veya üzerinde değişiklik yaptığınız bir PHP nesnesini kolayca UBL-TR formatında bir XML çıktısına dönüştürebilirsiniz.

```php
// ... $invoiceObject üzerinde değişiklikler yaptığınızı varsayalım ...

// Nesneyi XML string'ine dönüştürün
$newXmlString = $manager->toXml($invoiceObject);

// XML'i bir dosyaya kaydedin
file_put_contents('path/to/new_invoice.xml', $newXmlString);

echo "Yeni fatura XML'i başarıyla oluşturuldu!";
```

### 4. JSON Çıktısı Alma

Nesnelerinizi hata ayıklama veya başka sistemlerle entegrasyon için JSON formatına da dönüştürebilirsiniz.

```php
$jsonString = $manager->toJson($invoiceObject);
echo $jsonString;
```

---

## Geliştirme

Eğer GİB tarafından yayınlanan XSD şemalarında bir değişiklik olursa veya yeni şemalar eklenirse, aşağıdaki komutlarla PHP sınıflarını ve JMS metadata dosyalarını yeniden üretebilirsiniz:

1.  `xsd2php.yml` dosyasını projenizin ihtiyaçlarına göre düzenleyin.
2.  Aşağıdaki komutu çalıştırın:

```bash
vendor/bin/xsd2php convert xsd2php.yml
```

---

## Lisans

Bu yazılım tescillidir ve kapalı kaynak kodludur.

Yazılımın kullanımı, kopyalanması, dağıtılması veya değiştirilmesi, yazılım sahibi Furkan Meclis'in açık ve yazılı iznine tabidir. İzinsiz kullanım, yasal işlem başlatılmasına neden olabilir.

Lisans ve kullanım koşulları hakkında bilgi almak için lütfen [furkanmeclis@icloud.com](mailto:furkanmeclis@icloud.com) adresi üzerinden iletişime geçin.
