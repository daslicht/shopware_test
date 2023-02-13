import './component';
import './preview';

Shopware.Service('cmsService').registerCmsBlock({
 name: 'product-columns',
 category: 'commerce',
 label: 'Product Columns',
 component:        'sw-cms-block-product-columns',
 previewComponent: 'sw-cms-preview-product-columns',
 defaultConfig: {
     marginBottom: '20px',
     marginTop: '20px',
     marginLeft: '20px',
     marginRight: '20px',
     sizingMode: 'boxed'
 },
 slots: {
  productSlider: "product-slider"
 }
});

