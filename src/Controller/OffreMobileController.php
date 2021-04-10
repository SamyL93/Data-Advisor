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
//        $orderBy = 'DESC';
//        if ($request->query->has('order')){
//            $orderBy = $request->query->get('order');
//        }
        $box_internet = $em->getRepository(OffreMobile::class)->findAll();
        $jsonData = $box_internet;
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
            return $this->redirectToRoute("box_internet");
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
        return $this->redirectToRoute("box_internet");
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
            $em->persist($offreMobile);
            $em->flush();
            return $this->redirectToRoute("box_internet");
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
        $mobile = $em->getRepository(OffreMobile::class)->findAll();

        return $this->render('mobile/index.html.twig', [
            'mobile' => $mobile
        ]);
    }

}




