<?php

namespace App\Controller;

use App\Entity\Detalle;
use App\Entity\Pedido;
use App\Form\DetalleType;
use App\Repository\DetalleRepository;
use App\Repository\PedidoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

#[Route('/detalle')]
class DetalleController extends AbstractController
{
   

    #[Route('/new', name: 'app_detalle_new', methods: ['GET', 'POST'])]
    public function new(Request $request, DetalleRepository $detalleRepository, PedidoRepository $pedidoRepository, UserInterface $empresa): Response
    {

        /** @var Empresa $empresa */

        $detalle = new Detalle(($pedidoRepository->findBy(
            array(), 
            array('id' => 'DESC'),
            1, 
          ))[0  ]);

        $form = $this->createForm(DetalleType::class, $detalle);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $detalleRepository->add($detalle);
            $detalleRepository->add($detalle);
            return $this->redirectToRoute('app_detalle_new_continuacion', [], Response::HTTP_SEE_OTHER);
           
        }


        return $this->renderForm('detalle/new.html.twig', [
           
            'detalle' => $detalle,
            'form' => $form,
            'empresa' => $empresa->getNombreEmpresa(),
        ]);
    }

    #[Route('/new_continuar', name: 'app_detalle_new_continuacion', methods: ['GET', 'POST'])]
    public function new2(Request $request, DetalleRepository $detalleRepository, PedidoRepository $pedidoRepository, UserInterface $empresa): Response
    {

        /** @var Empresa $empresa */

        $detalle = new Detalle(($pedidoRepository->findBy(
            array(), 
            array('id' => 'DESC'),
            1, 
          ))[0  ]);

        $form = $this->createForm(DetalleType::class, $detalle);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $detalleRepository->add($detalle);
            return $this->redirectToRoute('app_detalle_new_continuacion', [], Response::HTTP_SEE_OTHER);
        }


        return $this->renderForm('detalle/newSecundario.html.twig', [
           
            'detalle' => $detalle,
            'form' => $form,
            'empresa' => $empresa->getNombreEmpresa(),
        ]);
    }









    #[Route('/{id}/edit', name: 'app_detalle_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Detalle $detalle, DetalleRepository $detalleRepository,UserInterface $empresa): Response
    {
        $form = $this->createForm(DetalleType::class, $detalle);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $detalleRepository->add($detalle);
            
            return $this->redirectToRoute('app_pedido_index', [], Response::HTTP_SEE_OTHER);
        }

        /** @var Empresa $empresa */

        return $this->renderForm('detalle/edit.html.twig', [
            'detalle' => $detalle,
            'form' => $form,
            'empresa' => $empresa->getNombreEmpresa(),
        ]);
    }

    #[Route('/{id}', name: 'app_detalle_delete', methods: ['POST'])]
    public function delete(Request $request, Detalle $detalle, DetalleRepository $detalleRepository): Response
    {
        if ($this->isCsrfTokenValid('delete' . $detalle->getId(), $request->request->get('_token'))) {
            $detalleRepository->remove($detalle);
        }

        return $this->redirectToRoute('app_pedido_index', [], Response::HTTP_SEE_OTHER);
    }
}
