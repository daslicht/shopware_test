<?php declare(strict_types=1);

namespace SoundDesign\Storefront\Controller;

use Shopware\Storefront\Controller\StorefrontController;
use Shopware\Core\System\SalesChannel\SalesChannelContext;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route(defaults={"_routeScope"={"storefront"}})
 */
class SoundDesignController extends StorefrontController
{
   /**
    * @Route("/example", name="frontend.example.example", methods={"GET"}, defaults={"_routeScope"={"storefront"}})
    */
    public function showExample(): Response
    {
        return $this->renderStorefront('@SoundDesign/storefront/page/example.html.twig', [
            'example' => 'Hello world'
        ]);
    } 
}