import './bootstrap';
import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import { ZiggyVue } from 'ziggy-js';
import { Ziggy } from './ziggy';
import '../css/main.min.css';
import '../css/fonts/bootstrap/bootstrap-icons.css'
import './vendor/overlay-scroll/OverlayScrollbars.min.css'

import './jquery.min';
import './bootstrap.bundle.min';
//import './moment.min';
import './vendor/overlay-scroll/jquery.overlayScrollbars.min';
import './vendor/overlay-scroll/custom-scrollbar';
import './custom';



createInertiaApp({
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
    return pages[`./Pages/${name}.vue`]
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
     .use(ZiggyVue,Ziggy)//paquete para Laravel que permite acceder a las rutas con nombre de Laravel directamente desde JavaScript
      .use(plugin)
      .mount(el)

  },
})
