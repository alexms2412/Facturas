<?php

namespace App\Controller;

use App\Entity\Cliente;
use App\Form\ClienteType;
use App\Repository\ClienteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

#[Route('/cliente')]
class ClienteController extends AbstractController
{
    #[Route('/', name: 'app_cliente_index', methods: ['GET'])]
    public function index(ClienteRepository $clienteRepository,  UserInterface $empresa): Response
    {

         /** @var Empresa $empresa */

        return $this->render('cliente/index.html.twig', [
            'clientes' => $clienteRepository->findBy(['empresa' => $empresa->getId()]),
            'empresa' => $empresa->getNombreEmpresa(),
           
        ]);

        
    }

    #[Route('/error_cliente', name: 'app_cliente_error', methods: ['GET'])]
    public function indexError(ClienteRepository $clienteRepository,  UserInterface $empresa): Response
    {

         /** @var Empresa $empresa */

        return $this->render('cliente/capturarError.html.twig', [
            'clientes' => $clienteRepository->findBy(['empresa' => $empresa->getId()]),
            'empresa' => $empresa->getNombreEmpresa(),
           
        ]);

        
    }


    #[Route('/new', name: 'app_cliente_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ClienteRepository $clienteRepository,  UserInterface $empresa): Response
    {
        
         /** @var Empresa $empresa */

        $cliente = new Cliente($empresa);
        $form = $this->createForm(ClienteType::class, $cliente);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $clienteRepository->add($cliente);
            return $this->redirectToRoute('app_cliente_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('cliente/new.html.twig', [
            'cliente' => $cliente,
            'form' => $form,
            'empresa' => $empresa->getNombreEmpresa(),
            
        ]);
    }

    #[Route('/{id}', name: 'app_cliente_show', methods: ['GET'])]
    public function show(Cliente $cliente, UserInterface $empresa): Response
    {

         /** @var Empresa $empresa */

        return $this->render('cliente/show.html.twig', [
            'cliente' => $cliente,
            'empresa' => $empresa->getNombreEmpresa(),
        ]);
    }

    #[Route('/{id}/edit', name: 'app_cliente_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Cliente $cliente, ClienteRepository $clienteRepository, UserInterface $empresa): Response
    {

         /** @var Empresa $empresa */

        $form = $this->createForm(ClienteType::class, $cliente);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $clienteRepository->add($cliente);
            return $this->redirectToRoute('app_cliente_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('cliente/edit.html.twig', [
            'cliente' => $cliente,
            'form' => $form,
            'empresa' => $empresa->getNombreEmpresa()
        ]);
    }


 

    #[Route('/{id}', name: 'app_cliente_delete', methods: ['POST'])]
    public function delete(Request $request, Cliente $cliente, ClienteRepository $clienteRepository): Response
    {


        try{

        if ($this->isCsrfTokenValid('delete'.$cliente->getId(), $request->request->get('_token'))) {
            $clienteRepository->remove($cliente);
        }

    }catch(\Exception){
        return $this->redirectToRoute('app_cliente_error', [], Response::HTTP_SEE_OTHER);

       

    }

        return $this->redirectToRoute('app_cliente_index', [], Response::HTTP_SEE_OTHER);
    }
}
