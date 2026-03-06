<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Attribute\Route as AttributeRoute;

class StyleTestController extends AbstractController
{
    #[AttributeRoute('/style-test', name: 'app_style_test')]
    public function index(): Response
    {
        $mockSlots = [
            '2026-03-01' => [['time' => '09:00', 'ids' => [1]], ['time' => '10:00', 'ids' => [2]]],
            '2026-03-06' => [['time' => '11:00', 'ids' => [3]], ['time' => '12:00', 'ids' => [4]], ['time' => '13:00', 'ids' => [5]]],
            '2026-03-10' => [['time' => '14:00', 'ids' => [6]], ['time' => '15:00', 'ids' => [7]]],
        ];

        return $this->render('style_test/index.html.twig', [
            'slotsJson' => json_encode($mockSlots),
            'styles' => [
                ['name' => 'Default', 'class' => '', 'css' => 'default.css'],
                ['name' => 'Pink', 'class' => 'pulecal-style-pink', 'css' => 'pink.css'],
                ['name' => 'Cyber Dark', 'class' => 'pulecal-style-dark', 'css' => 'dark.css'],
                ['name' => 'Teal Oasis', 'class' => 'pulecal-style-teal', 'css' => 'teal.css'],
                ['name' => 'Warm Coffee', 'class' => 'pulecal-style-warm', 'css' => 'warm.css'],
                ['name' => 'Corporate Blue', 'class' => 'pulecal-style-blue', 'css' => 'blue.css'],
            ]
        ]);
    }
}
