import './component';
import './preview';

Shopware.Service('cmsService').registerCmsBlock({
    name:             'sound-design-gallery',
    label:            'Sound Design Gallery',
    category:         'commerce',
    component:        'sw-cms-block-sound-design-gallery',
    previewComponent: 'sw-cms-preview-sound-design-gallery',
    defaultConfig: {
        marginBottom: '20px',
        marginTop:    '20px',
        marginLeft:   '20px',
        marginRight:  '20px',
        sizingMode:   'boxed',
    },
    slots: {
     left: 'text',
     right: 'dailymotion'
    },
});
