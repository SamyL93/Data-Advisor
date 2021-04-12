<?php


namespace App\Controller;


use App\Entity\Carte;
use App\Form\CarteType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class CarteController extends AbstractController
{


    /**
     * @Route(path="/api/carte/{identifier}", name="api_carte_identifier", methods={"GET"})
     * @param Request $request
     * @param EntityManagerInterface $em
     * @return JsonResponse
     */
    public function returnCarte(EntityManagerInterface $em, $identifier)
    {
        $identifier = strtoupper($identifier);
        $carte = $em->getRepository(Carte::class)->findOneBy([
            'identifier' => $identifier
        ]);

        $string = file_get_contents($carte->getJson());
        $jsonData = json_decode($string, true);

        return new JsonResponse($jsonData, Response::HTTP_OK);
    }

    /**
     * @Route(path="/carte/add", name="carte_add")
     * @param Request $request
     * @param EntityManagerInterface $em
     */
    public function addCarte(Request $request, EntityManagerInterface $em)
    {
        $carte = new Carte();
        $form = $this->createForm(CarteType::class, $carte);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $em->persist($carte);
            $em->flush();
            return $this->redirectToRoute("cartes");
        }
        return $this->render('carte/add.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route(path="/carte/edit/{id}", name="carte_edit")
     * @param Request $request
     * @param EntityManagerInterface $em
     */
    public function editCarte(Request $request, EntityManagerInterface $em, Carte $carte)
    {
        $form = $this->createForm(CarteType::class, $carte);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $em->persist($carte);
            $em->flush();
            return $this->redirectToRoute("cartes");
        }
        return $this->render('carte/add.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route(path="/carte/delete/{id}", name="carte_delete")
     * @param Request $request
     * @param EntityManagerInterface $em
     */
    public function deleteCarte(Carte $carte, EntityManagerInterface $em)
    {
        $em->remove($carte);
        $em->flush();
        return $this->redirectToRoute("cartes");
    }

    /**
     * @Route(path="/cartes", name="cartes")
     * @param Request $request
     */
    public function allCartes(EntityManagerInterface $em)
    {
        $cartes = $em->getRepository(Carte::class)->findAll();

        return $this->render('carte/index.html.twig', [
            'cartes' => $cartes
        ]);
    }
}