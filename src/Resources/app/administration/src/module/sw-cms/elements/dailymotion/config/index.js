import template from './sw-cms-el-config-dailymotion.html.twig';

Shopware.Component.register('sw-cms-el-config-dailymotion', {
    template,

    mixins: [
        'cms-element'
    ],

    computed: {
        dailyUrl: {
            get() {
                return this.element.config.dailyUrl.value;
            },

            set(value) {
                this.element.config.dailyUrl.value = value;
            }
        }
    },

    created() {
        this.createdComponent();
    },

    methods: {
        createdComponent() {
            this.initElementConfig('dailymotion');
        },

        onElementUpdate(value) {
            this.element.config.dailyUrl.value = value;

            this.$emit('element-update', this.element);
        }
    }
});