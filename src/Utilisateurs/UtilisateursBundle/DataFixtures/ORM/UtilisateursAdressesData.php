<?php
namespace Utilisateurs\UtilisateursBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ecommerce\EcommerceBundle\Entity\UtilisateursAdresses;

class UtilisateursAdressesData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $adresse1 = new UtilisateursAdresses();
        $adresse1->setUtilisateur($this->getReference('utilisateur1'));
        $adresse1->setNom('Doucoure');
        $adresse1->setPrenom('Sikaly');
        $adresse1->setTelephone('0600000000');
        $adresse1->setAdresse('6 rue c.colomb');
        $adresse1->setCp('93600');
        $adresse1->setPays('France');
        $adresse1->setVille('Aulnay-sous-bois');
        $adresse1->setComplement('au 3000');
        $manager->persist($adresse1);
        
        $adresse2 = new UtilisateursAdresses();
        $adresse2->setUtilisateur($this->getReference('utilisateur2'));
        $adresse2->setNom('Doucoure');
        $adresse2->setPrenom('Souleyman');
        $adresse2->setTelephone('0600000000');
        $adresse2->setAdresse('6 rue c.colomb');
        $adresse2->setCp('93600');
        $adresse2->setPays('France');
        $adresse2->setVille('Aulnay-sous-bois');
        $adresse2->setComplement('au 3000');
        $manager->persist($adresse2);
        
        $manager->flush();
    }
    
    public function getOrder()
    {
        return 6;
    }
}