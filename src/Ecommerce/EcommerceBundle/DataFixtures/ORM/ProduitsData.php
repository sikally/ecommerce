<?php
namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ecommerce\EcommerceBundle\Entity\Produits;

class ProduitsData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $produit1 = new Produits();
        $produit1->setCategorie($this->getReference('categorie1'));
        $produit1->setDescription("le top des telephones.");
        $produit1->setDisponible('1');
        $produit1->setImage($this->getReference('media1'));
        $produit1->setNom('iphone 7');
        $produit1->setPrix('1000');
        $produit1->setTva($this->getReference('tva2'));
        $manager->persist($produit1);

        $produit2 = new Produits();
        $produit2->setCategorie($this->getReference('categorie1'));
        $produit2->setDescription("le meilleur telephone samsung.");
        $produit2->setDisponible('1');
        $produit2->setImage($this->getReference('media4'));
        $produit2->setNom('Samsung S8');
        $produit2->setPrix('699.99');
        $produit2->setTva($this->getReference('tva2'));
        $manager->persist($produit2);

        $produit3 = new Produits();
        $produit3->setCategorie($this->getReference('categorie1'));
        $produit3->setDescription("Un beau televiseur LG");
        $produit3->setDisponible('1');
        $produit3->setImage($this->getReference('media5'));
        $produit3->setNom('LG  55UH615V');
        $produit3->setPrix('869.90');
        $produit3->setTva($this->getReference('tva2'));
        $manager->persist($produit3);
        
        $produit4 = new Produits();
        $produit4->setCategorie($this->getReference('categorie1'));
        $produit4->setDescription("Le Top des televiseur LG");
        $produit4->setDisponible('1');
        $produit4->setImage($this->getReference('media6'));
        $produit4->setNom('LG 43UH603V');
        $produit4->setPrix('2.99');
        $produit4->setTva($this->getReference('tva2'));
        $manager->persist($produit4);
        
        $produit5 = new Produits();
        $produit5->setCategorie($this->getReference('categorie2'));
        $produit5->setDescription("Un des plus beau televiseur au monde");
        $produit5->setDisponible('1');
        $produit5->setImage($this->getReference('media7'));
        $produit5->setNom('TV Sony Bravia');
        $produit5->setPrix('1199.90');
        $produit5->setTva($this->getReference('tva2'));
        $manager->persist($produit5);
        
        $produit6 = new Produits();
        $produit6->setCategorie($this->getReference('categorie2'));
        $produit6->setDescription("le dernier televiseur de Sony");
        $produit6->setDisponible('1');
        $produit6->setImage($this->getReference('media8'));
        $produit6->setNom('SONY KD49XD8305');
        $produit6->setPrix('999.99');
        $produit6->setTva($this->getReference('tva2'));
        $manager->persist($produit6);
        
        $manager->flush();
    }
    
    public function getOrder()
    {
        return 4;
    }
}