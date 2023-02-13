import template from './sw-cms-preview-product-columns.html.twig';
import './sw-cms-preview-product-columns.scss';

//const { Component } = Shopware;

Shopware.Component.register('sw-cms-preview-product-columns', {
    template
});

// see: 
// administration/Resources/app/administration/src/module/sw-cms/blocks/commerce/product-slider/preview/index.js