<?php

namespace App\DataFixtures;

use App\Entity\Artist;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class ArtistFixtures extends Fixture implements  DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $artists = [
            ['firstname'=>'Daniel','lastname'=>'Marcelin','agent'=>'walid@sull.com'],
            ['firstname'=>'Philippe','lastname'=>'Laurent','agent'=>'walid@sull.com'],
            ['firstname'=>'Marius','lastname'=>'Von Mayenburg','agent'=>'walid@sull.com'],
            ['firstname'=>'Olivier','lastname'=>'Boudon','agent'=>'walid@sull.com'],
            ['firstname'=>'Anne Marie','lastname'=>'Loop','agent'=>'walid@sull.com'],
            ['firstname'=>'Pietro','lastname'=>'Varasso','agent'=>'walid@sull.com'],
            ['firstname'=>'Laurent','lastname'=>'Caron','agent'=>'walid@sull.com'],
            ['firstname'=>'Élena','lastname'=>'Perez','agent'=>'walid@sull.com'],
            ['firstname'=>'Guillaume','lastname'=>'Alexandre','agent'=>'walid@sull.com'],
            ['firstname'=>'Claude','lastname'=>'Semal','agent'=>'walid@sull.com'],
            ['firstname'=>'Laurence','lastname'=>'Warin','agent'=>'anh@sull.com'],
            ['firstname'=>'Pierre','lastname'=>'Wayburn','agent'=>'anh@sull.com'],
            ['firstname'=>'Gwendoline','lastname'=>'Gauthier','agent'=>'anh@sull.com'],
        ];
        
        foreach($artists as $data) {
            $artist = new Artist();
            $artist->setFirstname($data['firstname']);
            $artist->setLastname($data['lastname']);

            $this->addReference($data['firstname'].'-'.$data['lastname'], $artist);
            $this->addReference($data['firstname'], $artist);
            $artist->setAgent($this->getReference($data['agent']));
            $manager->persist($artist);
        }
        
        $manager->flush();
    }

    public function getDependencies() {
        return [
            AgentFixtures::class,
        ];
    }
}
