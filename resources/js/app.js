import './bootstrap';

import { createApp } from 'vue';
import router from './router';
import App from './views/App.vue';
import { createPinia } from 'pinia';

const pinia = createPinia();
const app = createApp(App);

app.use(router);
app.use(pinia);

app.config.globalProperties.$axios = window.axios;

app.mount('#app');
