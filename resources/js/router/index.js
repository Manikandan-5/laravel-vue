
import {createRouter,createWebHistory} from 'vue-router';
import Header from '../components/Header.vue'
import About from '../components/About.vue'
import Review from '../components/Review.vue'


const routes=[
    {
        path:'/',
        component:Header
    },
    {
        path:'/about',
        component:About
    },
    {
        path:'/comments',
        component:Review
    },
]

const router = createRouter({
    history:createWebHistory(),
    routes
})

export default router;

