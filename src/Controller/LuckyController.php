<?php
/**
 * Created by PhpStorm.
 * User: bor
 * Date: 22.05.2018
 * Time: 15:38
 */
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class LuckyController
{
    public function number()
    {
        $number = mt_rand(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
}