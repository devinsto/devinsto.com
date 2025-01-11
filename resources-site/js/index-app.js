import { createVueApp } from './create-vue-app.js'
import IndexComponent from './Components/IndexComponent.vue'
import IndexBlogComponent from './Components/IndexBlogComponent.vue'

createVueApp({
    IndexComponent,
    IndexBlogComponent,
}).mount('#app')
