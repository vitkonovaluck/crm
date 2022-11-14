import './bootstrap';

import {createApp} from "vue/dist/vue.esm-bundler";
import {createVueRouter} from 'vue-router/dist/vue-router.esm-bundler';
import routes from './routes';

Vue.use(VueRouter);

import Home from "./components/Home.vue";

let router = createVueRouter({ routes, mode: 'history' });

const app = createApp({
    components:{
        Home
    },
    router,
});

app.mount('#app');
