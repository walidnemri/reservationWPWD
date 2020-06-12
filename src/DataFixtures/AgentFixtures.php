<?php

namespace App\DataFixtures;

use App\Entity\Agent;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;


class AgentFixtures extends Fixture 
{
    public function load(ObjectManager $manager)
    {
        $agent = [
            ['firstname'=>'Walid','email'=>'walid@sull.com'],
            ['firstname'=>'Anh','email'=>'anh@sull.com'],
        ];
        
        foreach($agent as $data) {
            $agent = new Agent();
            $agent->setName($data['firstname']);
            $agent->setEmail($data['email']);

            $this->addReference($data['email'],$agent);
            
            $manager->persist($agent);
        }
        
        $manager->flush();
    }
}
