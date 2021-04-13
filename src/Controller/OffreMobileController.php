<?php


namespace App\Controller;


use App\Entity\OffreMobile;
use App\Form\MobileType;
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
        $filter = [];
        if ($request->query->has('min')){
            $filter["max"] = $request->query->get('max');
            $filter["min"] = $request->query->get('min');
        }

        if ($request->query->has('operateur'))
            $filter["operateur"] = $request->query->get('operateur');

        if ($request->query->has('data'))
            $filter["data"] = $request->query->get('data');
        
        if ($request->query->has('type')){
            $type = $request->query->get('type');
            $filter["type"] = $type;
        }

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

        $mobile = $em->getRepository(OffreMobile::class)->findAllFilters($search, $filter, $orderBy, 9, $offset);
        $countMobile = $em->getRepository(OffreMobile::class)->countAllFilters($search, $filter, $orderBy, 9, $offset);
        $jsonData = [
            "data"=>$mobile,
            "count"=>$countMobile
        ];
        return new JsonResponse($jsonData, Response::HTTP_OK);
    }

    /**
     * @Route(path="/api/3/mobile", name="api_3_mobile", methods={"GET"})
     * @param Request $request
     * @param EntityManagerInterface $em
     * @return JsonResponse
     */
    public function return3Mobile(EntityManagerInterface $em)
    {
        $mobile = $em->getRepository(OffreMobile::class)->findAllMax3();
        $jsonData = $mobile;
        return new JsonResponse($jsonData, Response::HTTP_OK);
    }

    /**
     * @Route(path="/api/data/mobile", name="api_data_mobile", methods={"GET"})
     * @param Request $request
     * @param EntityManagerInterface $em
     * @return JsonResponse
     */
    public function returnDataMobile(EntityManagerInterface $em)
    {
        $mobile = $em->getRepository(OffreMobile::class)->findAllData();
        $jsonData = [];
        foreach ($mobile as $data){
            array_push($jsonData, $data["data"]);
        }
        sort($jsonData, SORT_NUMERIC);
        return new JsonResponse($jsonData, Response::HTTP_OK);
    }

    /**
     * @Route(path="/mobile/add", name="mobile_add")
     * @param Request $request
     * @param EntityManagerInterface $em
     */
    public function addMobile(Request $request, EntityManagerInterface $em)
    {
        $mobile = new OffreMobile();
        $form = $this->createForm(MobileType::class, $mobile);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $em->persist($mobile);
            $em->flush();
            return $this->redirectToRoute("mobile");
        }
        return $this->render('mobile/add.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route(path="/mobile/delete/{id}", name="mobile_delete")
     * @param Request $request
     * @param EntityManagerInterface $em
     */
    public function deleteMobile(OffreMobile $offreMobile, Request $request, EntityManagerInterface $em)
    {
        $em->remove($offreMobile);
        $em->flush();
        return $this->redirectToRoute("mobile");
    }

    /**
     * @Route(path="/mobile/edit/{id}", name="mobile_edit")
     * @param Request $request
     * @param EntityManagerInterface $em
     */
    public function editMobile(OffreMobile $offreMobile, Request $request, EntityManagerInterface $em)
    {
        $form = $this->createForm(MobileType::class, $offreMobile);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            dump($offreMobile);
            $em->persist($offreMobile);
            $em->flush();
            return $this->redirectToRoute("mobile");
        }
        return $this->render('mobile/edit.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route(path="/mobile", name="mobile")
     * @param Request $request
     * @param EntityManagerInterface $em
     */
    public function allMobile(EntityManagerInterface $em)
    {
        $mobile = $em->getRepository(OffreMobile::class)->findBy([],["operateur"=>"ASC"]);
        return $this->render('mobile/index.html.twig', [
            'mobile' => $mobile
        ]);
    }

}




