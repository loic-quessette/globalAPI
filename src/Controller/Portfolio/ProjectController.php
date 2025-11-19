<?php

namespace App\Controller\Portfolio;

use App\Repository\Portfolio\ProjectRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\SerializerInterface;

final class ProjectController extends AbstractController
{
    #[Route('/portfolio/projects', name: 'app_portfolio_projects')]
    public function getProjects(ProjectRepository $projectRepository, SerializerInterface $serializer): Response
    {
        $projects = $projectRepository->findAll();
        $projects=null;
        if ($projects){
            $data = $serializer->serialize($projects, 'json');
            return new JsonResponse($data, Response::HTTP_OK, [], true);
        }
        return new JsonResponse(null, Response::HTTP_NOT_FOUND);
    }
}
