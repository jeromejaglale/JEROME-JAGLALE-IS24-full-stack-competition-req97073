import { createApp } from 'vue'
import App from './App.vue'

import './assets/main.css'

import Vue from 'vue'
Vue.config.silent = true

import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'

// Bootstrap and BootstrapVue CSS files
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

// Make BootstrapVue available everywhere
Vue.use(BootstrapVue)

// BootstrapVue icon components plugin
Vue.use(IconsPlugin)


createApp(App).mount('#app')
