require('./bootstrap')


import { createApp } from 'vue'
import home from './components/home'

/* import Cadastro from './components/cadastro' */

const app = createApp({})

app.component('home', home)

/* app.component('cadastro', Cadastro) */

app.mount('#app')