<?php


namespace App\Controller;


use App\Entity\Article;
use App\Repository\OffreMobileRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OffreMobileController extends AbstractController
{

    /**
     * @Route(path="/api/mobile", name="api_mobile", methods={"GET"})
     * @param Request $request
     * @param EntityManagerInterface $em
     * @return JsonResponse
     */
    public function returnMobile(Request $request, EntityManagerInterface $em)
    {

        if($request->isXmlHttpRequest() && $request->isMethod("GET")) {

            $offreMobile = $em->getRepository(OffreMobileRepository::class)->findAll();

            $jsonData = [];

            $jsonData = $offreMobile;
            return new JsonResponse($jsonData, Response::HTTP_OK);
        }

        return new JsonResponse(null, Response::HTTP_BAD_REQUEST);
    }








}




