<?php

namespace App\Controller;

use App\Entity\Detalle;
use App\Form\DetalleType;
use App\Repository\DetalleRepository;
use App\Repository\PedidoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/detalle')]
class DetalleController extends AbstractController
{
    #[Route('/', name: 'app_detalle_index', methods: ['GET'])]
    public function index(DetalleRepository $detalleRepository): Response
    {
        return $this->render('detalle/index.html.twig', [
            'detalles' => $detalleRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_detalle_new', methods: ['GET', 'POST'])]
    public function new(Request $request, DetalleRepository $detalleRepository, PedidoRepository $pedidoRepository): Response
    {
        $detalle = new Detalle();
        $form = $this->createForm(DetalleType::class, $detalle);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $detalleRepository->add($detalle);
            return $this->redirectToRoute('app_detalle_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('detalle/new.html.twig', [
            'pedido' => $pedidoRepository -> end(),
            'detalle' => $detalle,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_detalle_show', methods: ['GET'])]
    public function show(Detalle $detalle): Response
    {
        return $this->render('detalle/show.html.twig', [
            'detalle' => $detalle,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_detalle_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Detalle $detalle, DetalleRepository $detalleRepository): Response
    {
        $form = $this->createForm(DetalleType::class, $detalle);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $detalleRepository->add($detalle);
            return $this->redirectToRoute('app_detalle_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('detalle/edit.html.twig', [
            'detalle' => $detalle,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_detalle_delete', methods: ['POST'])]
    public function delete(Request $request, Detalle $detalle, DetalleRepository $detalleRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$detalle->getId(), $request->request->get('_token'))) {
            $detalleRepository->remove($detalle);
        }

        return $this->redirectToRoute('app_detalle_index', [], Response::HTTP_SEE_OTHER);
    }
}
