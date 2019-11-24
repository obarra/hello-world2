<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class LuckyController
{
    public function number()
    {
        $nombre = random_int(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$nombre.'</body></html>'
        );
    }
}
?>