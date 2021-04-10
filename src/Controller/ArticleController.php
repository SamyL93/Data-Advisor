<?php


namespace App\Controller;


use App\Entity\Article;
use App\Form\ArticleType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{

    /**
     * @Route(path="/api/articles", name="api_article", methods={"GET"})
     * @param Request $request
     * @param EntityManagerInterface $em
     * @return JsonResponse
     */
    public function returnArticles(Request $request, EntityManagerInterface $em)
    {
        $orderBy = 'DESC';
        if ($request->query->has('order')){
            $orderBy = $request->query->get('order');
        }
        $articles = $em->getRepository(Article::class)->findAllOrder($orderBy);
        $jsonData = $articles;
        return new JsonResponse($jsonData, Response::HTTP_OK);
    }

    /**
     * @Route(path="/article/add", name="article_add")
     * @param Request $request
     * @param EntityManagerInterface $em
     */
    public function addArticle(Request $request, EntityManagerInterface $em)
    {
        $article = new Article();
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $em->persist($article);
            $em->flush();
            return $this->redirectToRoute("articles");
        }
        return $this->render('article/add.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route(path="/article/delete/{id}", name="article_delete")
     * @param Request $request
     * @param EntityManagerInterface $em
     */
    public function deleteArticle(Article $article, Request $request, EntityManagerInterface $em)
    {
        $em->remove($article);
        $em->flush();
        return $this->redirectToRoute("articles");
    }

    /**
     * @Route(path="/article/edit/{id}", name="article_edit")
     * @param Request $request
     * @param EntityManagerInterface $em
     */
    public function editArticle(Article $article, Request $request, EntityManagerInterface $em)
    {
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $em->persist($article);
            $em->flush();
            return $this->redirectToRoute("articles");
        }
        return $this->render('article/add.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route(path="/articles", name="articles")
     * @param Request $request
     * @param EntityManagerInterface $em
     */
    public function allArticle(Request $request, EntityManagerInterface $em)
    {
        $articles = $em->getRepository(Article::class)->findAll();

        return $this->render('article/index.html.twig', [
            'articles' => $articles
        ]);
    }

}




