

<!-- FILE PRODOTTI PER CANI -->

<?php
include_once __DIR__ . '/products.php';

class Dog extends Products
{
    public $type;
    public $poster;

    public function __construct($name, $price, $poster, $type)
    {
        $this->type = $type;
        $this->poster = $poster;
        parent::__construct($name, $price);
    }
}

$ciotola = new Dog('Ciotole + supporto', 6.00, 'https://images.eprice.it/nobrand/0/Lightbox/230/204477230/222322236688PRDID.0.jpg', 'Cani');
$mangime = new Dog('Croccantini 29 pz.', 16.50, 'https://i.ebayimg.com/images/g/b70AAOSwEthggUtf/s-l500.jpg', 'Cani');
$gioco = new Dog('Osso di gomma', 5.80, 'https://www.tradeshopitalia.com/13575-large_default/giochi-masticabili-sonori-osso-per-animali-per-cani-morbida-gomma-resistente.jpg', 'Cani');
$cuccia = new Dog('Cuccia per cani', 20.00, 'https://images.eprice.it/nobrand/0/hres/516/207977516/8718475715283_a_en_hd_1.jpg', 'Cani');

$products_dog = [$ciotola, $mangime, $gioco, $cuccia];