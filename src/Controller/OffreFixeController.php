<?php


namespace App\Controller;


use App\Entity\Article;
use App\Repository\OffreFixeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OffreFixeController extends AbstractController
{

    /**
     * @Route(path="/api/info", name="api_info", methods={"GET"})
     * @param Request $request
     * @param EntityManagerInterface $em
     * @return JsonResponse
     */
    public function returnArticles(Request $request, EntityManagerInterface $em)
    {

        if($request->isXmlHttpRequest() && $request->isMethod("GET")) {

            $offreFixe = $em->getRepository(OffreFixeRepository::class)->findAll();

            $jsonData = [];

            $jsonData = $offreFixe;
            return new JsonResponse($jsonData, Response::HTTP_OK);
        }

        return new JsonResponse(null, Response::HTTP_BAD_REQUEST);
    }








}




