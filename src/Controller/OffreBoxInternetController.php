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
        $filter = [];
        if ($request->query->has('max')){
            $filter["max"] = $request->query->get('max');
            $filter["min"] = $request->query->get('min');
        }

        if ($request->query->has('operateur'))
            $filter["operateur"] = $request->query->get('operateur');

        if ($request->query->has('type'))
            $filter["type"] = $request->query->get('type');

        if ($request->query->has('hasTv'))
            $filter["hasTv"] = $request->query->get('hasTv');

        $orderBy = [];
        if ($request->query->has('orderBy')){
            $orderBy["prix"] = $request->query->get('orderBy');
        }

        $search = [];
        if ($request->query->has('search')){
            $search["titre"] = $request->query->get('search');
        }

        $offset = 0;
        if ($request->query->has('offset')){
            $offset = $request->query->get('offset');
        }

        $boxInternet = $em->getRepository(OffreBoxInternet::class)->findAllFilters($search, $filter, $orderBy, 9, $offset);
        $countBoxInternet = $em->getRepository(OffreBoxInternet::class)->countAllFilters($search, $filter, $orderBy, 9, $offset);
        $jsonData = [
            "data"=>$boxInternet,
            "count"=>$countBoxInternet
        ];
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
        $boxInternet = $em->getRepository(OffreBoxInternet::class)->findBy([],["operateur"=>"ASC"]);

        return $this->render('box_internet/index.html.twig', [
            'boxInternet' => $boxInternet
        ]);
    }


}




