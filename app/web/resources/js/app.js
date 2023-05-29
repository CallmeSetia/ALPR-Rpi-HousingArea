import {createApp} from 'vue'
import store from "./util/store.js";
import router from "./router/router";
import App from './App.vue'
import 'flowbite';
import VueSweetalert2 from 'vue-sweetalert2';
import 'sweetalert2/dist/sweetalert2.min.css';



createApp(App)
    .use(router)
    .use(store)
    .use(VueSweetalert2)
    .mount("#app")
