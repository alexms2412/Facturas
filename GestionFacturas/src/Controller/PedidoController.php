<?php

namespace App\Controller;

use App\Entity\Pedido;
use App\Form\PedidoType;
use App\Repository\PedidoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Detalle;
use App\Form\DetalleType;
use App\Repository\DetalleRepository;
use Symfony\Component\Security\Core\User\UserInterface;
use App\Repository\EmpresaRepository;
use App\Core\DataBase;


#[Route('/pedido')]
class PedidoController extends AbstractController
{


    #[Route('/', name: 'app_pedido_index', methods: ['GET'])]
    public function index(PedidoRepository $pedidoRepository, UserInterface $empresa): Response
    {
        /** @var Empresa $empresa */

        return $this->render('pedido/index.html.twig', [
            'pedidos' => $pedidoRepository->findBy(['empresa' => $empresa->getId()]),
            'empresa' => $empresa->getNombreEmpresa(),

        ]);
    }


    #[Route('/facturas', name: 'app_pedido_facturas', methods: ['GET'])]
    public function facturas(PedidoRepository $pedidoRepository, UserInterface $empresa): Response
    {
        /** @var Empresa $empresa */

        return $this->render('pedido/indexFacturas.html.twig', [
            'pedidos' => $pedidoRepository->findBy(['empresa' => $empresa->getId()]),
            'empresa' => $empresa->getNombreEmpresa(),

        ]);
    }



    #[Route('/new', name: 'app_pedido_new', methods: ['GET', 'POST'])]
    public function new(Request $request, PedidoRepository $pedidoRepository, DetalleRepository $detalleRepository, UserInterface $empresa): Response
    {

        /** @var Empresa $empresa */
        $pedido = new Pedido($empresa);
        $form = $this->createForm(PedidoType::class, $pedido);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $pedidoRepository->add($pedido);
            return $this->redirectToRoute('app_detalle_new', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('pedido/new.html.twig', [
            // 'detalles' => $detalleRepository->findOneBy(),
            //'pedido' => $pedidoRepository->findBy(['empresa' => $empresa->getId()]),
            'pedido' => $pedido,
            'form' => $form,
            'empresa' => $empresa->getNombreEmpresa(),
        ]);
    }

    #[Route('/{id}', name: 'app_pedido_show', methods: ['GET'])]
    public function show(Pedido $pedido, DetalleRepository $detalleRepository, UserInterface $empresa): Response
    {
        /** @var Empresa $empresa */
        return $this->render('pedido/show.html.twig', [
            'pedido' => $pedido,
            'detalles' => $detalleRepository->findAll(),
            'empresa' => $empresa->getNombreEmpresa(),
        ]);
    }


    #[Route('/{id}/edit', name: 'app_pedido_edit', methods: ['GET', 'POST'])]
    public function edit( UserInterface $empresa,Request $request, Pedido $pedido, PedidoRepository $pedidoRepository, DetalleRepository $detalleRepository): Response
    {
         /** @var Empresa $empresa */
        $form = $this->createForm(PedidoType::class, $pedido);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $pedidoRepository->add($pedido);
            return $this->redirectToRoute('app_pedido_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('pedido/edit.html.twig', [
            'pedido' => $pedido,
            'form' => $form,
            'detalles' => $detalleRepository->findAll(),
            'empresa' => $empresa->getNombreEmpresa(),
        ]);
    }

    #[Route('/{id}', name: 'app_pedido_delete', methods: ['POST'])]
    public function delete(Request $request, Pedido $pedido, PedidoRepository $pedidoRepository): Response
    {

        if ($this->isCsrfTokenValid('delete' . $pedido->getId(), $request->request->get('_token'))) {
            $pedidoRepository->remove($pedido);
            //$detalleRepository->remove($detalle->get());
        }

        return $this->redirectToRoute('app_pedido_index', [], Response::HTTP_SEE_OTHER);
    }
}
