<?php


namespace App\Controller;


use App\Entity\Article;
use App\Form\ArticleType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class FormController extends AbstractController
{
    /**
     * @Route(path="/form/article", name="form_article")
     * @param Request $request
     * @param EntityManagerInterface $em
     */
    public function formArticle(Request $request, EntityManagerInterface $em)
    {
        $article = new Article();
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            dump($article);
            $em->persist($article);
            $em->flush();
        }
        return $this->render('article/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
}