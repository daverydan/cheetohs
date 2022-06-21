require("./bootstrap");

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

window.Vue = require("vue").default;

Vue.component(
    "view-kittens-btn",
    require("./components/ViewKittensBtn.vue").default
);

const app = new Vue({
    el: "#app",
});
