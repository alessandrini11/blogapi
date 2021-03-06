<?php

namespace App\DataFixtures;

use App\Entity\Article;
use App\Entity\Category;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create();
        $users = [];
        $categories = [];
        for ($i=0; $i < 4; $i++) {
            $category = new Category();
            $category->setNom($faker->word)
                ->setColor($faker->hexColor);
            $manager->persist($category);
            $categories[] = $category;
        }
        for ($i = 0; $i < 2; $i++){
            $user = new User();
            $user->setNom($faker->name)
                ->setPassword('test')
                ->setPseudo($faker->userName);
            $manager->persist($user);
            $users[] = $user;
        }
        for ($i = 0; $i < 10 ;$i++){
            $userPost = $users[mt_rand(0,count($users) -1 )];
            $cat = $categories[mt_rand(0,count($categories) - 1)];
            $post = new Article();
            $post->setTitle($faker->text(30))
                ->setDescription($faker->text(80))
                ->setContent($faker->text(500))
                ->setUrl($faker->url)
                ->setImg($faker->imageUrl())
                ->setUser($userPost)
                ->addCategory($cat);
            $manager->persist($post);
        }
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
