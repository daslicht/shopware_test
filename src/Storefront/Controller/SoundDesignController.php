<?php
 
namespace SoundDesignPlugin\Storefront\Controller;
 
use Shopware\Core\Framework\Routing\Annotation\RouteScope;
use Shopware\Core\System\SalesChannel\SalesChannelContext;
use Shopware\Storefront\Controller\StorefrontController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Shopware\Storefront\Page\GenericPageLoader;
use Shopware\Storefront\Page\Wishlist\WishlistPageLoader;
use Shopware\Core\Framework\DataAbstractionLayer\EntityRepositoryInterface;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Criteria;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Filter\EqualsFilter;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Filter\EqualsAnyFilter;
use Shopware\Storefront\Page\Wishlist\GuestWishlistPageLoader;
/**
 * @RouteScope(scopes={"storefront"})
 */
class SoundDesignController extends StorefrontController
{
    private WishlistPageLoader $wishlistPageLoader;
    protected $genericPageLoader;
    protected EntityRepositoryInterface $customerRepository;
    private GuestWishlistPageLoader $guestPageLoader;


    public function __construct(GenericPageLoader $genericPageLoader, 
                                WishlistPageLoader $wishlistPageLoader,  
                                GuestWishlistPageLoader $guestPageLoader, 
                                EntityRepositoryInterface $customerRepository) 
    {
         // $this->genericPageLoader = $genericPageLoader;
         // $this->wishlistPageLoader = $wishlistPageLoader;
         // $this->context = \Shopware\Core\Framework\Context::createDefaultContext();
         // $this->guestPageLoader = $guestPageLoader;
         // $this->customerRepository = $customerRepository;
    }

    // /**
    //  * @Route("/wishlist/{wishlist_id}", name="frontend.SoundDesignplugin.skeleton", methods={"GET"})
    //  */
    // public function showPage(Request $request, SalesChannelContext $context ): Response
    // {

    // }
}