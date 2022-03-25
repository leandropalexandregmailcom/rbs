require('./bootstrap');

import { createApp } from 'vue';
import router from './router'
import UserIndex from './components/user/UserIndex.vue'
console.log(router)
createApp({
    components: {
        UserIndex
    }
}).use(router).mount('#app')
