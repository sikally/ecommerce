<?php
namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ecommerce\EcommerceBundle\Entity\Media;

class MediaData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $media1 = new Media();
        $media1->setPath('https://pmcdn.priceminister.com/photo/apple-iphone-7-plus-128-go-or-1101972529_ML.jpg');
        $media1->setAlt('iphone 7');
        $manager->persist($media1);
        
        $media2 = new Media();
        $media2->setPath('http://boutique.orange.fr/media-cms/mediatheque/318x450-iphone-6s-or-rose-vue-1-35327.jpg');
        $media2->setAlt('iphone 6');
        $manager->persist($media2);

        $media3 = new Media();
        $media3->setPath('https://pmcdn.priceminister.com/photo/samsung-galaxy-a5-16-go-noir-android-4-4-4-kitkat-1101543824_ML.jpg');
        $media3->setAlt('Samsung A5');
        $manager->persist($media3);   
            
        $media4 = new Media();
        $media4->setPath('http://static.fnac-static.com/multimedia/Images/FR/NR/14/cf/84/8703764/1540-1/tsp20170331164934/Smartphone-Samsung-Galaxy-S8-64-Go-Noir-Carbone.jpg');
        $media4->setAlt('Samsung S8');
        $manager->persist($media4);              
        
        $media5 = new Media();
        $media5->setPath('https://www.media-rdc.com/medias/5a5a0cae61c43098bf917dc943a2c56e/p_300x300/c164d258070c3090a643373fbd75b00d.jpg');
        $media5->setAlt('LG  55UH615V');
        $manager->persist($media5);
        
        $media6 = new Media();
        $media6->setPath('https://pmcdn.priceminister.com/photo/tv-lg-43uh603v-1200-pmi-smart-tv-1104444178_ML.jpg');
        $media6->setAlt('LG 43UH603V');
        $manager->persist($media6);
        
        $media7 = new Media();
        $media7->setPath('http://static.fnac-static.com/multimedia/Images/FR/MDM/8a/7a/06/424586/1540-0/tsp20170613171827/TV-Sony-Bravia-KD55XD7005BaeP-UHD-4K.jpg');
        $media7->setAlt('TV Sony Bravia KD55XD7005BAEP UHD 4K');
        $manager->persist($media7);
        
        $media8 = new Media();
        $media8->setPath('http://image.darty.com/hifi_video/televiseurs-led/grand_ecran_led/sony_kd49xd8305_4k_uhd_k1607124247396L_120230469.jpg');
        $media8->setAlt('SONY KD49XD8305 4K UHD');
        $manager->persist($media8);
        
        $manager->flush();
        
        $this->addReference('media1', $media1);
        $this->addReference('media2', $media2);
        $this->addReference('media3', $media3);
        $this->addReference('media4', $media4);
        $this->addReference('media5', $media5);        
        $this->addReference('media6', $media6);
        $this->addReference('media7', $media7);        
        $this->addReference('media8', $media8);
    }
    
    public function getOrder()
    {
        return 1;
    }
}