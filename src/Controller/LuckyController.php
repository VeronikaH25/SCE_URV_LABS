<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LuckyController extends AbstractController
{
    public function __construct(
        private UserRepository $userRepository
    )
    {
    }

    #[Route('/lucky/number')]
    public function number(): JsonResponse
    {
        $user = $this->userRepository->find(1);

        $number = $user->getId();

        $data = [
            'userId' => $user->getId(),
            'luckyNumber' => $number
        ];

        return new JsonResponse($data);
    }
}
