import './bootstrap';

import {createApp} from "vue/dist/vue.esm-bundler";

import Home from "./components/Home.vue";

const app = createApp({
    components:{
        Home
    }
});

app.mount('#app');
