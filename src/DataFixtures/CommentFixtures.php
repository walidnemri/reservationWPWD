<?php

namespace App\DataFixtures;

use App\Entity\Comment;
use Cocur\Slugify\Slugify;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class CommentFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $commentTab = [
            ['comment'=>'test comment', 'user'=>'bob', 'slug'=>'cible-mouvante'],
            ['comment'=>'test comment', 'user'=>'fred', 'slug'=>'cible-mouvante'],
            ['comment'=>'test comment', 'user'=>'judith', 'slug'=>'ceci-n-est-pas-un-chanteur-belge'],
        ]; 
        // $product = new Product();
        // $manager->persist($product);

        forEach( $commentTab as $data ) {
            $comment = new Comment();
            $user = $this->getReference($data['user']);
            $show = $this->getReference($data['slug']);
            $comment->setComment($data['comment']);
            $comment->setUser($user);
            $comment->settheShow($show);

            $manager->persist($comment);
        }

        $manager->flush();

    }


    public function getDependencies() {
        return [
            UserFixtures::class,
            ShowFixtures::class,
        ];
    }
}
