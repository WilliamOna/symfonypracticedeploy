<?php
// src/Controller/LuckyController.php
namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class HelloController
{
      /**
      * @Route("/lucky/number")
      */
    public function number()
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }

          /**
      * @Route("/")
      */
      public function hello()
      {
  
          return new Response(
              '<html><body>Symfony app v3. Watch this jed...</body></html>'
          );
      }
}