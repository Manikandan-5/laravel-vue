import {createRouter,createWebHistory} from 'vue-router';
import Header from '../components/Header.vue'
import About from '../components/About.vue'
import ExampleComponent from '../components/ExampleComponent.vue';


const routes=[
    {
        path:'/',
        component:ExampleComponent
    },
    {
        path:'/about',
        component:About
    }
]

const router = createRouter({
    history:createWebHistory(),
    routes
})

export default router;

