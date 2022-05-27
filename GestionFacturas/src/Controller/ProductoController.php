<?php

namespace App\Controller;

use App\Entity\Producto;
use App\Form\ProductoType;
use App\Repository\ProductoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

#[Route('/producto')]
class ProductoController extends AbstractController
{
    #[Route('/', name: 'app_producto_index', methods: ['GET'])]
    public function index(ProductoRepository $productoRepository, UserInterface $empresa): Response
    {
         /** @var Empresa $empresa */
        return $this->render('producto/index.html.twig', [
            'productos' => $productoRepository->findBy(['empresa' => $empresa->getId()]),
            'empresa' => $empresa->getNombreEmpresa(),
            
        ]);
    }

    #[Route('/error_producto', name: 'app_producto_error', methods: ['GET'])]
    public function index2(ProductoRepository $productoRepository, UserInterface $empresa): Response
    {
         /** @var Empresa $empresa */
        return $this->render('producto/capturarError.html.twig', [
            
            'empresa' => $empresa->getNombreEmpresa(),
            
        ]);
    }



    #[Route('/new', name: 'app_producto_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ProductoRepository $productoRepository, UserInterface $empresa): Response
    {
         /** @var Empresa $empresa */

        $producto = new Producto($empresa);
        $form = $this->createForm(ProductoType::class, $producto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $productoRepository->add($producto);
            return $this->redirectToRoute('app_producto_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('producto/new.html.twig', [
            'producto' => $producto,
            'form' => $form,
            'empresa' => $empresa->getNombreEmpresa(),
        ]);
    }

    #[Route('/{id}', name: 'app_producto_show', methods: ['GET'])]
    public function show(Producto $producto, UserInterface $empresa): Response
    {

        /** @var Empresa $empresa */

        return $this->render('producto/show.html.twig', [
            'producto' => $producto,
            'empresa' => $empresa->getNombreEmpresa(),
        ]);
    }

    #[Route('/{id}/edit', name: 'app_producto_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Producto $producto, ProductoRepository $productoRepository, UserInterface $empresa): Response
    {

        /** @var Empresa $empresa */

        $form = $this->createForm(ProductoType::class, $producto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $productoRepository->add($producto);
            return $this->redirectToRoute('app_producto_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('producto/edit.html.twig', [
            'producto' => $producto,
            'form' => $form,
            'empresa' => $empresa->getNombreEmpresa(),
            
        ]);
    }

    

   

    #[Route('/{id}', name: 'app_producto_delete', methods: ['POST'])]
    public function delete(Request $request, Producto $producto, ProductoRepository $productoRepository): Response
    {
        try{

            if ($this->isCsrfTokenValid('delete'.$producto->getId(), $request->request->get('_token'))) {
                $productoRepository->remove($producto);
            }
            
        }catch(\Exception){
            return $this->redirectToRoute('app_producto_error', [], Response::HTTP_SEE_OTHER);

           

        }
       
        return $this->redirectToRoute('app_producto_index', [], Response::HTTP_SEE_OTHER);
    }
}
