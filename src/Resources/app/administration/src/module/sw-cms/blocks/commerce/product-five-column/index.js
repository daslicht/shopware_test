import './component';
import './preview';

Shopware.Service('cmsService').registerCmsBlock({
    name:             'product-five-column',
    label:            'sw-cms.blocks.commerce.productFiveColumn.label',
    category:         'commerce',
    component:        'sw-cms-block-product-five-column',
    previewComponent: 'sw-cms-preview-product-five-column',
    defaultConfig: {
        marginBottom: '20px',
        marginTop:    '20px',
        marginLeft:   '20px',
        marginRight:  '20px',
        sizingMode:   'boxed',
    },
    slots: {
        one:   'product-box',
        two:   'product-box',
        three: 'product-box',
        four:  'product-box',
        five:  'product-box',
    },
});
