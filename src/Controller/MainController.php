<?php

namespace App\Controller;


use App\Entity\DatasetAtlas;
use App\Entity\SearchTerm;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{

    protected $em;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->em = $entityManager;
    }

    /**
     * @Route("/result/{term}/{collection}", name="result")
     *
     * @param $term
     * @param null $collection
     * @param null $id
     * @return Response
     */
    public function resultAction($term, $collection = null, $id = null)
    {
        /** @var DatasetAtlas $set */
        /*
        $set = $this->getDoctrine()
            ->getRepository(DatasetAtlas::class)
            ->findBy(['category' => $term]);
        */

        if ($collection) {
            $set = $this->em->getRepository(DatasetAtlas::class)->createQueryBuilder('d')
                ->where('d.category LIKE :term')
                ->orWhere('d.definitions LIKE :term')
                ->andWhere("d.contentType != 'NUL'")
                ->andWhere("d.category != ''")
                ->andWhere("d.collection = :collection")
                ->setParameter('term', '%' . $term . '%')
                ->setParameter('collection', $collection)
                ->addOrderBy('d.category', 'ASC')
                ->getQuery()
                ->getResult();
        } else if ($id) {
            $set = $this->em->getRepository(DatasetAtlas::class)->createQueryBuilder('d')
                ->where('d.uid = :id')
                ->setParameter('id', $id)
                ->getQuery()
                ->getResult();
        } else {
            $set = $this->em->getRepository(DatasetAtlas::class)->createQueryBuilder('d')
                ->where('d.category LIKE :term')
                ->orWhere('d.definitions LIKE :term')
                ->andWhere("d.contentType != 'NUL'")
                ->andWhere("d.category != ''")
                ->setParameter('term', '%' . $term . '%')
                ->addOrderBy('d.category', 'ASC')
                ->getQuery()
                ->getResult();
        }


        /*
        if (!$set) {
            throw $this->createNotFoundException(
                'No set found for search term '.$term
            );
        }
        */

        /*
        foreach ($set as $elem) {
            var_dump($elem->getUid());
            $uid = $elem->getUid();
            $category = $set->getCategory();
            $subcategory = $set->getSubCategory();
            $collection = $set->getCollection();
            $xpath = $set->getXpath();
            $name = $set->getName();
            $format = $set->getFormat();
            $contentType = $set->getContentType();
            $exampleContent = $set->getExampleContent();
            $mchoiceValues = $set->getMchoiceValues();
            $definitions = $set->getDefinitions();
            $fieldType = $set->getFieldType();
            $elementType = $set->getElementType();
            $parent = $set->getParent();
            $attributed = $set->getAttributed();
            $children = $set->getChildren();
            $attributes = $set->getAttributes();
        }
        */

        //return new Response('Check out this great product: '.$set->getName());
        return $this->render('template.html.twig', ['set' => $set, 'nr_of_results' => sizeof($set), 'term' => $term]);

    }


    /**
     * @Route("/result_id/{id}", name="result_id")
     *
     * @param $id
     * @return Response
     */
    public function resultIDAction($id)
    {
        $set = $this->em->getRepository(DatasetAtlas::class)->createQueryBuilder('d')
            ->where('d.uid = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getResult();

        return $this->render('template.html.twig', ['set' => $set]);
    }


    /**
     * @Route("/search", name="search")
     *
     * @param Request $request
     * @return Response
     */
    public function searchAction(Request $request)
    {
        $form = $this->createFormBuilder(new SearchTerm())
            ->add('term', SearchType::class)
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $task = $form->getData();
            return $this->redirectToRoute("result", array('term' => $task->getTerm()));
        }

        return $this->render('search.html.twig', [
            'form' => $form->createView(),
        ]);

    }








}