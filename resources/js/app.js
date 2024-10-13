import './bootstrap';
import { createApp, h } from 'vue'
import { createInertiaApp, Link, router, Head } from '@inertiajs/vue3'
import NProgress from 'nprogress'
import Layout from './Layout/Layout.vue';

createInertiaApp({
  resolve: async name => {
    const pages = import.meta.glob('./Pages/**/*.vue');
    const page = (await pages[`./Pages/${name}.vue`]()).default;

    if (page.layout == undefined) {
      page.layout = Layout;
    }

    return page;
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .component('Link', Link)
      .component('Head', Head)
      .mount(el)
  },
  title: title => `Learn Inertia.Js - ${title}`,
})

router.on('start', () => NProgress.start())