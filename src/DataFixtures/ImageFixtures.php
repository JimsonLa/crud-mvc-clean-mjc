<?php

namespace App\DataFixtures;

use App\Entity\Image;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ImageFixtures extends Fixture
{
public function load(ObjectManager $manager): void
{
    $images = [
        ['test.jpg', 'chantier 1'],
        ['test2.jpg', 'chantier 2'],
        ['test3.jpg', 'chantier 3'],
    ];

    foreach ($images as [$file, $alt]) {
        $image = new Image();
        $image->setFilePath('images/realisations/' . $file);
        $image->setAltText($alt);

        $manager->persist($image);
    }

    $manager->flush();
}
}