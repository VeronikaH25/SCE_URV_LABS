<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\CarRepository;
class DefaultController extends AbstractController
{
    public function __construct(
        private readonly CarRepository $carRepository,
    )
    {

    }
    #[Route('/hello/demo', name: 'app_hello_demo')]
    public function helloDemo(): Response
    {
        // Usamos findAll() en vez de find(1) para traerlos todos
        $allCars = $this->carRepository->findAll();

        return $this->render('demo/hello_demo.html.twig', [
            'cars' => $allCars, // Pasamos el array completo a Twig
        ]);
    }
}
