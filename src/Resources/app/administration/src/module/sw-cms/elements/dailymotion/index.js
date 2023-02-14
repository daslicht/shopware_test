import './component';
import './preview';
import './config';

Shopware.Service('cmsService').registerCmsElement({
 name:             'dailymotion',
 label:            'sw-cms.elements.customDailymotionElement.label',
 component:        'sw-cms-el-dailymotion',
 configComponent:  'sw-cms-el-config-dailymotion',
 previewComponent: 'sw-cms-el-preview-dailymotion',
 defaultConfig: {
     dailyUrl: {
         source: 'static',
         value: ''
     }
 }
});