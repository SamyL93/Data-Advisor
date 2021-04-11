<?php


namespace App\Controller;


use App\Entity\OffreBoxInternet;
use App\Form\BoxInternetType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OffreBoxInternetController extends AbstractController
{

    /**
     * @Route(path="/api/box-internet", name="api_box_internet", methods={"GET"})
     * @param Request $request
     * @param EntityManagerInterface $em
     * @return JsonResponse
     */
    public function returnBoxInternet(Request $request, EntityManagerInterface $em)
    {
        $price = 'DESC';
        if ($request->query->has('price')){
            $price = $request->query->get('price');
        }
        $boxInternet = $em->getRepository(OffreBoxInternet::class)->findAllFilters($price);
        $jsonData = $boxInternet;
        return new JsonResponse($jsonData, Response::HTTP_OK);
    }

    /**
     * @Route(path="/api/3/box-internet", name="api_3_box_internet", methods={"GET"})
     * @param Request $request
     * @param EntityManagerInterface $em
     * @return JsonResponse
     */
    public function return3BoxInternet(Request $request, EntityManagerInterface $em)
    {
//        $orderBy = 'DESC';
//        if ($request->query->has('order')){
//            $orderBy = $request->query->get('order');
//        }
        $box_internet = $em->getRepository(OffreBoxInternet::class)->findAllMax3();
        $jsonData = $box_internet;
        return new JsonResponse($jsonData, Response::HTTP_OK);
    }

    /**
     * @Route(path="/box-internet/add", name="box_internet_add")
     * @param Request $request
     * @param EntityManagerInterface $em
     */
    public function addBoxInternet(Request $request, EntityManagerInterface $em)
    {
        $boxInternet = new OffreBoxInternet();
        $form = $this->createForm(BoxInternetType::class, $boxInternet);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $em->persist($boxInternet);
            $em->flush();
            return $this->redirectToRoute("box_internet");
        }
        return $this->render('box_internet/add.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route(path="/box-internet/delete/{id}", name="box_internet_delete")
     * @param Request $request
     * @param EntityManagerInterface $em
     */
    public function deleteBoxInternet(OffreBoxInternet $offreBoxInternet, Request $request, EntityManagerInterface $em)
    {
        $em->remove($offreBoxInternet);
        $em->flush();
        return $this->redirectToRoute("box_internet");
    }

    /**
     * @Route(path="/box-internet/edit/{id}", name="box_internet_edit")
     * @param Request $request
     * @param EntityManagerInterface $em
     */
    public function editBoxInternet(OffreBoxInternet $offreBoxInternet, Request $request, EntityManagerInterface $em)
    {
        $form = $this->createForm(BoxInternetType::class, $offreBoxInternet);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $em->persist($offreBoxInternet);
            $em->flush();
            return $this->redirectToRoute("box_internet");
        }
        return $this->render('box_internet/edit.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route(path="/box-internet", name="box_internet")
     * @param Request $request
     * @param EntityManagerInterface $em
     */
    public function allBoxInternet(Request $request, EntityManagerInterface $em)
    {
        $boxInternet = $em->getRepository(OffreBoxInternet::class)->findAll();

        return $this->render('box_internet/index.html.twig', [
            'boxInternet' => $boxInternet
        ]);
    }


}




