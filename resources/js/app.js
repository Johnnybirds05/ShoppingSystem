// app.js
import './bootstrap';

// import {createApp} from 'vue'

// import App from './components/App.vue'

// createApp(App).mount("#app")
import { createApp } from 'vue';

// Automatically register all Vue components in the components directory
const componentContext = require.context('./components', true, /\.vue$/);
const app = createApp({});

componentContext.keys().forEach((componentPath) => {
  const componentName = componentPath
    .split('/')
    .pop()
    .replace(/\.\w+$/, '');

  const component = componentContext(componentPath).default;
  app.component(componentName, component);
});

app.mount('#app');