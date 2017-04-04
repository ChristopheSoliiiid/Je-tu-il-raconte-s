<?php

namespace JTIR\PlatformBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use JTIR\PlatformBundle\Entity\Conte;

class LoadConte implements FixtureInterface {

    public function load(ObjectManager $manager) {

        $conte1 = new Conte();
        $conte1->setTitre("La belle au bois dormant");
        $conte1->setSituationInitiale("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non accusamus voluptas 
        rem veniam nobis architecto dolorem dolorum recusandae quia! Atque non ut doloremque, consequuntur tempora 
        minima dolorem eligendi eos autem! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae deleniti 
        alias error, similique fuga maxime soluta labore necessitatibus numquam delectus. Delectus cupiditate 
        perspiciatis quam, cumque molestiae ea quas eaque quaerat. Lorem ipsum dolor sit amet, consectetur 
        adipisicing elit. Totam optio quisquam, labore quaerat, vel delectus iusto consequuntur ex provident cupiditate. 
        Accusantium quia, laboriosam ipsa distinctio facilis necessitatibus. Minus aspernatur, eaque? Lorem ipsum dolor 
        sit amet, consectetur adipisicing elit. Deleniti at perferendis iusto totam accusantium inventore ipsa quidem 
        asperiores, aut culpa labore, possimus magnam numquam sequi aspernatur enim. Ab, omnis. Reiciendis. Lorem ipsum 
        dolor sit amet, consectetur adipisicing elit.");
        $conte1->getElementDeclencheur("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non accusamus voluptas 
        rem veniam nobis architecto dolorem dolorum recusandae quia! Atque non ut doloremque, consequuntur tempora 
        minima dolorem eligendi eos autem! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae deleniti 
        alias error, similique fuga maxime soluta labore necessitatibus numquam delectus. Delectus cupiditate 
        perspiciatis quam, cumque molestiae ea quas eaque quaerat. Lorem ipsum dolor sit amet, consectetur 
        adipisicing elit. Totam optio quisquam, labore quaerat, vel delectus iusto consequuntur ex provident cupiditate. 
        Accusantium quia, laboriosam ipsa distinctio facilis necessitatibus. Minus aspernatur, eaque? Lorem ipsum dolor 
        sit amet, consectetur adipisicing elit.");
        $conte1->setPeripetie("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non accusamus voluptas 
        rem veniam nobis architecto dolorem dolorum recusandae quia! Atque non ut doloremque, consequuntur tempora 
        minima dolorem eligendi eos autem! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae deleniti 
        alias error, similique fuga maxime soluta labore necessitatibus numquam delectus. Delectus cupiditate 
        perspiciatis quam, cumque molestiae ea quas eaque quaerat. Lorem ipsum dolor sit amet, consectetur 
        adipisicing elit. Totam optio quisquam, labore quaerat, vel delectus iusto consequuntur ex provident cupiditate. 
        Accusantium quia, laboriosam ipsa distinctio facilis necessitatibus. Minus aspernatur, eaque? Lorem ipsum dolor 
        sit amet, consectetur adipisicing elit. Deleniti at perferendis iusto totam accusantium inventore ipsa quidem 
        asperiores, aut culpa labore, possimus magnam numquam sequi aspernatur enim. Ab, omnis. Reiciendis. Lorem ipsum 
        dolor sit amet, consectetur adipisicing elit. Non accusamus voluptas rem veniam nobis architecto dolorem dolorum 
        recusandae quia! Atque non ut doloremque, consequuntur tempora minima dolorem eligendi eos autem! Lorem ipsum 
        dolor sit amet, consectetur adipisicing elit.");
        $conte1->setDenouement("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non accusamus voluptas 
        rem veniam nobis architecto dolorem dolorum recusandae quia! Atque non ut doloremque, consequuntur tempora 
        minima dolorem eligendi eos autem! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae deleniti 
        alias error, similique fuga maxime soluta labore necessitatibus numquam delectus. Delectus cupiditate 
        perspiciatis quam, cumque molestiae ea quas eaque quaerat. Lorem ipsum dolor sit amet, consectetur 
        adipisicing elit. Totam optio quisquam, labore quaerat, vel delectus iusto consequuntur ex provident cupiditate. 
        Accusantium quia, laboriosam ipsa distinctio facilis necessitatibus. Minus aspernatur, eaque? Lorem ipsum dolor 
        sit amet, consectetur adipisicing elit. Deleniti at perferendis iusto totam accusantium inventore ipsa quidem 
        asperiores, aut culpa labore, possimus magnam numquam sequi aspernatur enim. Ab, omnis. Reiciendis. Lorem ipsum 
        dolor sit amet, consectetur adipisicing elit. Non accusamus voluptas rem veniam nobis architecto dolorem dolorum 
        recusandae quia! Atque non ut doloremque, consequuntur tempora minima dolorem eligendi eos autem! Lorem ipsum 
        dolor sit amet, consectetur adipisicing elit.");
        $conte1->setSituationFinale("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non accusamus voluptas 
        rem veniam nobis architecto dolorem dolorum recusandae quia! Atque non ut doloremque, consequuntur tempora 
        minima dolorem eligendi eos autem! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae deleniti 
        alias error, similique fuga maxime soluta labore necessitatibus numquam delectus. Delectus cupiditate 
        perspiciatis quam, cumque molestiae ea quas eaque quaerat. Lorem ipsum dolor sit amet, consectetur 
        adipisicing elit. Totam optio quisquam, labore quaerat, vel delectus iusto consequuntur ex provident cupiditate. 
        Accusantium quia, laboriosam ipsa distinctio facilis necessitatibus. Minus aspernatur, eaque? Lorem ipsum dolor 
        sit amet, consectetur adipisicing elit.");
        $conte1->setDateCreation(new \DateTime());
        $conte1->setPartage(false);

        $conte2 = new Conte();
        $conte2->setTitre("Cendrillon");
        $conte2->setSituationInitiale("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non accusamus voluptas 
        rem veniam nobis architecto dolorem dolorum recusandae quia! Atque non ut doloremque, consequuntur tempora 
        minima dolorem eligendi eos autem! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae deleniti 
        alias error, similique fuga maxime soluta labore necessitatibus numquam delectus. Delectus cupiditate 
        perspiciatis quam, cumque molestiae ea quas eaque quaerat. Lorem ipsum dolor sit amet, consectetur 
        adipisicing elit. Totam optio quisquam, labore quaerat, vel delectus iusto consequuntur ex provident cupiditate. 
        Accusantium quia, laboriosam ipsa distinctio facilis necessitatibus. Minus aspernatur, eaque? Lorem ipsum dolor 
        sit amet, consectetur adipisicing elit. Deleniti at perferendis iusto totam accusantium inventore ipsa quidem 
        asperiores, aut culpa labore, possimus magnam numquam sequi aspernatur enim. Ab, omnis. Reiciendis. Lorem ipsum 
        dolor sit amet, consectetur adipisicing elit.");
        $conte2->getElementDeclencheur("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non accusamus voluptas 
        rem veniam nobis architecto dolorem dolorum recusandae quia! Atque non ut doloremque, consequuntur tempora 
        minima dolorem eligendi eos autem! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae deleniti 
        alias error, similique fuga maxime soluta labore necessitatibus numquam delectus. Delectus cupiditate 
        perspiciatis quam, cumque molestiae ea quas eaque quaerat. Lorem ipsum dolor sit amet, consectetur 
        adipisicing elit. Totam optio quisquam, labore quaerat, vel delectus iusto consequuntur ex provident cupiditate. 
        Accusantium quia, laboriosam ipsa distinctio facilis necessitatibus. Minus aspernatur, eaque? Lorem ipsum dolor 
        sit amet, consectetur adipisicing elit.");
        $conte2->setPeripetie("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non accusamus voluptas 
        rem veniam nobis architecto dolorem dolorum recusandae quia! Atque non ut doloremque, consequuntur tempora 
        minima dolorem eligendi eos autem! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae deleniti 
        alias error, similique fuga maxime soluta labore necessitatibus numquam delectus. Delectus cupiditate 
        perspiciatis quam, cumque molestiae ea quas eaque quaerat. Lorem ipsum dolor sit amet, consectetur 
        adipisicing elit. Totam optio quisquam, labore quaerat, vel delectus iusto consequuntur ex provident cupiditate. 
        Accusantium quia, laboriosam ipsa distinctio facilis necessitatibus. Minus aspernatur, eaque? Lorem ipsum dolor 
        sit amet, consectetur adipisicing elit. Deleniti at perferendis iusto totam accusantium inventore ipsa quidem 
        asperiores, aut culpa labore, possimus magnam numquam sequi aspernatur enim. Ab, omnis. Reiciendis. Lorem ipsum 
        dolor sit amet, consectetur adipisicing elit. Non accusamus voluptas rem veniam nobis architecto dolorem dolorum 
        recusandae quia! Atque non ut doloremque, consequuntur tempora minima dolorem eligendi eos autem! Lorem ipsum 
        dolor sit amet, consectetur adipisicing elit.");
        $conte2->setDenouement("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non accusamus voluptas 
        rem veniam nobis architecto dolorem dolorum recusandae quia! Atque non ut doloremque, consequuntur tempora 
        minima dolorem eligendi eos autem! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae deleniti 
        alias error, similique fuga maxime soluta labore necessitatibus numquam delectus. Delectus cupiditate 
        perspiciatis quam, cumque molestiae ea quas eaque quaerat. Lorem ipsum dolor sit amet, consectetur 
        adipisicing elit. Totam optio quisquam, labore quaerat, vel delectus iusto consequuntur ex provident cupiditate. 
        Accusantium quia, laboriosam ipsa distinctio facilis necessitatibus. Minus aspernatur, eaque? Lorem ipsum dolor 
        sit amet, consectetur adipisicing elit. Deleniti at perferendis iusto totam accusantium inventore ipsa quidem 
        asperiores, aut culpa labore, possimus magnam numquam sequi aspernatur enim. Ab, omnis. Reiciendis. Lorem ipsum 
        dolor sit amet, consectetur adipisicing elit. Non accusamus voluptas rem veniam nobis architecto dolorem dolorum 
        recusandae quia! Atque non ut doloremque, consequuntur tempora minima dolorem eligendi eos autem! Lorem ipsum 
        dolor sit amet, consectetur adipisicing elit.");
        $conte2->setSituationFinale("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non accusamus voluptas 
        rem veniam nobis architecto dolorem dolorum recusandae quia! Atque non ut doloremque, consequuntur tempora 
        minima dolorem eligendi eos autem! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae deleniti 
        alias error, similique fuga maxime soluta labore necessitatibus numquam delectus. Delectus cupiditate 
        perspiciatis quam, cumque molestiae ea quas eaque quaerat. Lorem ipsum dolor sit amet, consectetur 
        adipisicing elit. Totam optio quisquam, labore quaerat, vel delectus iusto consequuntur ex provident cupiditate. 
        Accusantium quia, laboriosam ipsa distinctio facilis necessitatibus. Minus aspernatur, eaque? Lorem ipsum dolor 
        sit amet, consectetur adipisicing elit.");
        $conte2->setDateCreation(new \DateTime());
        $conte2->setDateModification(new \DateTime());
        $conte2->setPartage(false);

        $conte3 = new Conte();
        $conte3->setTitre("Blanche Neige");
        $conte3->setSituationInitiale("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non accusamus voluptas 
        rem veniam nobis architecto dolorem dolorum recusandae quia! Atque non ut doloremque, consequuntur tempora 
        minima dolorem eligendi eos autem! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae deleniti 
        alias error, similique fuga maxime soluta labore necessitatibus numquam delectus. Delectus cupiditate 
        perspiciatis quam, cumque molestiae ea quas eaque quaerat. Lorem ipsum dolor sit amet, consectetur 
        adipisicing elit. Totam optio quisquam, labore quaerat, vel delectus iusto consequuntur ex provident cupiditate. 
        Accusantium quia, laboriosam ipsa distinctio facilis necessitatibus. Minus aspernatur, eaque? Lorem ipsum dolor 
        sit amet, consectetur adipisicing elit. Deleniti at perferendis iusto totam accusantium inventore ipsa quidem 
        asperiores, aut culpa labore, possimus magnam numquam sequi aspernatur enim. Ab, omnis. Reiciendis. Lorem ipsum 
        dolor sit amet, consectetur adipisicing elit.");
        $conte3->getElementDeclencheur("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non accusamus voluptas 
        rem veniam nobis architecto dolorem dolorum recusandae quia! Atque non ut doloremque, consequuntur tempora 
        minima dolorem eligendi eos autem! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae deleniti 
        alias error, similique fuga maxime soluta labore necessitatibus numquam delectus. Delectus cupiditate 
        perspiciatis quam, cumque molestiae ea quas eaque quaerat. Lorem ipsum dolor sit amet, consectetur 
        adipisicing elit. Totam optio quisquam, labore quaerat, vel delectus iusto consequuntur ex provident cupiditate. 
        Accusantium quia, laboriosam ipsa distinctio facilis necessitatibus. Minus aspernatur, eaque? Lorem ipsum dolor 
        sit amet, consectetur adipisicing elit.");
        $conte3->setPeripetie("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non accusamus voluptas 
        rem veniam nobis architecto dolorem dolorum recusandae quia! Atque non ut doloremque, consequuntur tempora 
        minima dolorem eligendi eos autem! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae deleniti 
        alias error, similique fuga maxime soluta labore necessitatibus numquam delectus. Delectus cupiditate 
        perspiciatis quam, cumque molestiae ea quas eaque quaerat. Lorem ipsum dolor sit amet, consectetur 
        adipisicing elit. Totam optio quisquam, labore quaerat, vel delectus iusto consequuntur ex provident cupiditate. 
        Accusantium quia, laboriosam ipsa distinctio facilis necessitatibus. Minus aspernatur, eaque? Lorem ipsum dolor 
        sit amet, consectetur adipisicing elit. Deleniti at perferendis iusto totam accusantium inventore ipsa quidem 
        asperiores, aut culpa labore, possimus magnam numquam sequi aspernatur enim. Ab, omnis. Reiciendis. Lorem ipsum 
        dolor sit amet, consectetur adipisicing elit. Non accusamus voluptas rem veniam nobis architecto dolorem dolorum 
        recusandae quia! Atque non ut doloremque, consequuntur tempora minima dolorem eligendi eos autem! Lorem ipsum 
        dolor sit amet, consectetur adipisicing elit.");
        $conte3->setDenouement("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non accusamus voluptas 
        rem veniam nobis architecto dolorem dolorum recusandae quia! Atque non ut doloremque, consequuntur tempora 
        minima dolorem eligendi eos autem! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae deleniti 
        alias error, similique fuga maxime soluta labore necessitatibus numquam delectus. Delectus cupiditate 
        perspiciatis quam, cumque molestiae ea quas eaque quaerat. Lorem ipsum dolor sit amet, consectetur 
        adipisicing elit. Totam optio quisquam, labore quaerat, vel delectus iusto consequuntur ex provident cupiditate. 
        Accusantium quia, laboriosam ipsa distinctio facilis necessitatibus. Minus aspernatur, eaque? Lorem ipsum dolor 
        sit amet, consectetur adipisicing elit. Deleniti at perferendis iusto totam accusantium inventore ipsa quidem 
        asperiores, aut culpa labore, possimus magnam numquam sequi aspernatur enim. Ab, omnis. Reiciendis. Lorem ipsum 
        dolor sit amet, consectetur adipisicing elit. Non accusamus voluptas rem veniam nobis architecto dolorem dolorum 
        recusandae quia! Atque non ut doloremque, consequuntur tempora minima dolorem eligendi eos autem! Lorem ipsum 
        dolor sit amet, consectetur adipisicing elit.");
        $conte3->setSituationFinale("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non accusamus voluptas 
        rem veniam nobis architecto dolorem dolorum recusandae quia! Atque non ut doloremque, consequuntur tempora 
        minima dolorem eligendi eos autem! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae deleniti 
        alias error, similique fuga maxime soluta labore necessitatibus numquam delectus. Delectus cupiditate 
        perspiciatis quam, cumque molestiae ea quas eaque quaerat. Lorem ipsum dolor sit amet, consectetur 
        adipisicing elit. Totam optio quisquam, labore quaerat, vel delectus iusto consequuntur ex provident cupiditate. 
        Accusantium quia, laboriosam ipsa distinctio facilis necessitatibus. Minus aspernatur, eaque? Lorem ipsum dolor 
        sit amet, consectetur adipisicing elit.");
        $conte3->setDateCreation(new \DateTime());
        $conte3->setPartage(false);

        $manager->persist($conte1);
        $manager->persist($conte2);
        $manager->persist($conte3);

        $manager->flush();

    }
}