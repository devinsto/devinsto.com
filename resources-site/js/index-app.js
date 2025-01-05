import { createVueApp } from './create-vue-app.js'
import IndexExampleComponent from './Components/IndexExampleComponent.vue'
import IndexBlogComponent from './Components/IndexBlogComponent.vue'

createVueApp({
    IndexExampleComponent,
    IndexBlogComponent,

}).mount('#app')
