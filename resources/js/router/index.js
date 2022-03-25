import { createRouter, createWebHistory } from "vue-router";
import UserIndex from '../components/user/UserIndex.vue'

const routes = [{
    path: '/SNJ/public/home',
    name: 'user.index',
    component: UserIndex
}]

export default createRouter({
    history: createWebHistory(),
    routes
})
