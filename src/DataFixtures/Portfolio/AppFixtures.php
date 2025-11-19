<?php

namespace App\DataFixtures\Portfolio;

use App\Entity\Portfolio\Project;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $symfonyProject = new Project();
        $symfonyProject->setTitle('Projet RentalCar');
        $symfonyProject->setDescription("Le projet RentalCar est un projet que j'ai réalisé durant ma" .
            " deuxième année de BTS SIO. Ce projet m’a permis d’appliquer les conceptes vu en cours et m’a également" .
            " permis de découvrir le Framework php Symfony utilisant le modèle MVC.");
        $symfonyProject->setGithubUrl('https://github.com/loic-quessette/wiki');
        $manager->persist($symfonyProject);

        $djangoProject = new Project();
        $djangoProject->setTitle('Django');
        $djangoProject->setDescription("Le projet Django est un projet que j'ai réalisé durant mon stage de deuxième" .
            " année de BTS SIO. Le but de cette application est d’afficher les données d’une base Microsoft Access" .
            " afin de pouvoir les interpréter et détecter les incohérences ou les erreurs de saisie.");
        $manager->persist($djangoProject);
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
