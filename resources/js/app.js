import "./bootstrap";

import "admin-lte/plugins/jquery/jquery.min.js";
import "admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js";
import "admin-lte/dist/js/adminlte.min.js";

import { createApp } from "vue/dist/vue.esm-bundler.js";
import { createRouter, createWebHistory } from "vue-router";
import Routes from "./route.js";
import "bootstrap/dist/css/bootstrap.css";
import "bootstrap-vue/dist/bootstrap-vue.css";
import BootstrapVue from "bootstrap-vue";

const app = createApp();

const router = createRouter({
    routes: Routes,
    history: createWebHistory(),
});

app.use(router);
app.use(BootstrapVue);
// app.component()

app.mount("#app");
