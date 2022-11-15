
//require('./bootstrap');

import { createApp } from 'vue/dist/vue.esm-bundler';

import Home from "./components/Home.vue";

// import router from './routes';

const app = createApp(Home);

// app.use(Home);
// app.use(router);
//

app.mount('#app');
