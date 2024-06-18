import "./assets/main.css";

import { createApp } from "vue";
import App from "./App.vue";
import Toast, { POSITION } from "vue-toastification";
// Import the CSS or use your own!
import "vue-toastification/dist/index.css";

const app = createApp(App);
const options = {
    position: POSITION.TOP_RIGHT,
};
app.use(Toast, options);
app.mount("#app");
