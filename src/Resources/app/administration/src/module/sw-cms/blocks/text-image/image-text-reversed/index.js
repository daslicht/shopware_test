import './component';
import './preview';

Shopware.Service('cmsService').registerCmsBlock({
 name: 'image-text-reversed',
 category: 'text-image',
 label: 'Image Text Reversed',
 component: 'sw-cms-block-image-text-reversed',
 previewComponent: 'sw-cms-preview-image-text-reversed',
 defaultConfig: {
     marginBottom: '20px',
     marginTop: '20px',
     marginLeft: '20px',
     marginRight: '20px',
     sizingMode: 'boxed'
 },
 slots: {
     left: 'text',
     right: 'image'
 }
});