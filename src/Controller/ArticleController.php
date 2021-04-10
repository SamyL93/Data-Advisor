<?php


namespace App\Controller;


use App\Entity\Article;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{

    /**
     * @Route(path="/api/articles", name="api_article")
     * @param Request $request
     * @param EntityManagerInterface $em
     * @return JsonResponse
     */
    public function returnArticles(Request $request, EntityManagerInterface $em)
    {

        if($request->isXmlHttpRequest() && $request->isMethod("GET")) {
            $orderBy = 'ASC';
            if ($request->query->has('order')){
                $orderBy = $request->query->get('order');
            }
            $articles = $em->getRepository(Article::class)->findAllOrder($orderBy);
            $jsonData = $articles;
            return new JsonResponse($jsonData, Response::HTTP_OK);
        }
        return new JsonResponse(null, Response::HTTP_BAD_REQUEST);
    }








}




