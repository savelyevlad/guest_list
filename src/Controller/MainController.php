<?php

namespace App\Controller;

use App\Entity\Record;
use App\Form\AddRecordType;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;

class MainController extends AbstractController
{

    /**
     * @Route("/", name="index")
     * @param Request $request
     * @return Response
     */
    public function index(Request $request) : Response {

        $entityManager = $this->getDoctrine()->getManager();

        $record = new Record(null, null, null);
        $formAddRecord = $this->createForm(AddRecordType::class, $record, [
            'action' => $this->generateUrl('index'),
            'method' => 'POST'
        ]);

        $formAddRecord->handleRequest($request);
        if($formAddRecord->isSubmitted() && $formAddRecord->isValid()) {
            $data = $formAddRecord->getData();
            $name = $data->getName();
            $mail = $data->getEmail();
            $content = $data->getContent();
            $record = new Record($name, $mail, $content);
            $entityManager->persist($record);
            $entityManager->flush();
        }

        if($request->getMethod() == "POST" && !$formAddRecord->isSubmitted()) {
            $id = $request->getContent(); // button_delete_17=X
            $id = substr($id, 14);
            $id = substr($id, 0, -2);
            $record = $entityManager->find(Record::class, $id);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($record);
            $entityManager->flush();
        }

//        $request->request->get('input_name');

        if (is_null($this->getUser())) {
            $username = "anon";
            $role = ["nobody"];
        }
        else {
            $username = $this->getUser()->getUsername();
            $role = $this->getUser()->getRoles();
        }

        $recordRepository = $this->getDoctrine()->getRepository(Record::class);
        $records = $recordRepository->findAll();

        return $this->render('base/base.html.twig',
            ['username' => $username,
                'user_role' => $role,
                'records' => $records,
                'form_add_record' => $formAddRecord->createView()]);
    }
}