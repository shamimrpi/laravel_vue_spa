// In your main.js or app.js
import { createApp } from 'vue';
import App from './App.vue';
import { createRouter, createWebHistory } from 'vue-router';
import routes from './routes';

const app = createApp(App);



// Create a router instance
const router = createRouter({
  history: createWebHistory(),
  routes,
});

app.use(router);

// Mount the app to the element with the id 'app'
app.mount('#app');
