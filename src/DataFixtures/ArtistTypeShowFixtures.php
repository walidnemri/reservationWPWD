<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class ArtistTypeShowFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $ats = [
            [
                'artist_firstname'=>'Daniel',
                'artist_lastname'=>'Marcelin',
                'type'=>'auteur',
                'show_slug'=>'ayiti',
            ],
            [
                'artist_firstname'=>'Philippe',
                'artist_lastname'=>'Laurent',
                'type'=>'auteur',
                'show_slug'=>'ayiti',
            ],
            [
                'artist_firstname'=>'Daniel',
                'artist_lastname'=>'Marcelin',
                'type'=>'scénographe',
                'show_slug'=>'ayiti',
            ],
            [
                'artist_firstname'=>'Philippe',
                'artist_lastname'=>'Laurent',
                'type'=>'scénographe',
                'show_slug'=>'ayiti',
            ],
            [
                'artist_firstname'=>'Daniel',
                'artist_lastname'=>'Marcelin',
                'type'=>'comédien',
                'show_slug'=>'ayiti',
            ],
            [
                'artist_firstname'=>'Marius',
                'artist_lastname'=>'Von Mayenburg',
                'type'=>'auteur',
                'show_slug'=>'cible-mouvante',
            ],
            [
                'artist_firstname'=>'Olivier',
                'artist_lastname'=>'Boudon',
                'type'=>'scénographe',
                'show_slug'=>'cible-mouvante',
            ],
            [
                'artist_firstname'=>'Anne Marie',
                'artist_lastname'=>'Loop',
                'type'=>'comédien',
                'show_slug'=>'cible-mouvante',
            ],
            [
                'artist_firstname'=>'Pietro',
                'artist_lastname'=>'Varasso',
                'type'=>'comédien',
                'show_slug'=>'cible-mouvante',
            ],
            [
                'artist_firstname'=>'Laurent',
                'artist_lastname'=>'Caron',
                'type'=>'comédien',
                'show_slug'=>'cible-mouvante',
            ],
            [
                'artist_firstname'=>'Élena',
                'artist_lastname'=>'Perez',
                'type'=>'comédien',
                'show_slug'=>'cible-mouvante',
            ],
            [
                'artist_firstname'=>'Guillaume',
                'artist_lastname'=>'Alexandre',
                'type'=>'comédien',
                'show_slug'=>'cible-mouvante',
            ],
            [
                'artist_firstname'=>'Claude',
                'artist_lastname'=>'Semal',
                'type'=>'auteur',
                'show_slug'=>'ceci-n-est-pas-un-chanteur-belge',
            ],
            [
                'artist_firstname'=>'Laurence',
                'artist_lastname'=>'Warin',
                'type'=>'scénographe',
                'show_slug'=>'ceci-n-est-pas-un-chanteur-belge',
            ],
            [
                'artist_firstname'=>'Claude',
                'artist_lastname'=>'Semal',
                'type'=>'comédien',
                'show_slug'=>'ceci-n-est-pas-un-chanteur-belge',
            ],
            [
                'artist_firstname'=>'Pierre',
                'artist_lastname'=>'Wayburn',
                'type'=>'auteur',
                'show_slug'=>'manneke',
            ],
            [
                'artist_firstname'=>'Gwendoline',
                'artist_lastname'=>'Gauthier',
                'type'=>'auteur',
                'show_slug'=>'manneke',
            ],
            [
                'artist_firstname'=>'Philippe',
                'artist_lastname'=>'Laurent',
                'type'=>'scénographe',
                'show_slug'=>'manneke',
            ],
            [
                'artist_firstname'=>'Pierre',
                'artist_lastname'=>'Wayburn',
                'type'=>'comédien',
                'show_slug'=>'manneke',
            ],
            [
                'artist_firstname'=>'Gwendoline',
                'artist_lastname'=>'Gauthier',
                'type'=>'comédien',
                'show_slug'=>'manneke',
            ],
        ];
        
        foreach($ats as $data) {
            $at = $this->getReference($data['artist_firstname']
                    .'-'.$data['artist_lastname']
                    .'-'.$data['type']);
            $show = $this->getReference($data['show_slug']);

            $show->addArtistType($at);

            $manager->persist($show);
        }
        
        $manager->flush();
    }
    
    public function getDependencies() {
        return [
            ArtistTypeFixtures::class,
            ShowFixtures::class,
        ];
    }
}
