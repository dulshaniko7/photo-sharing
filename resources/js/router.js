import Vue from 'vue';
import Router from 'vue-router';
import Index from "./components/Index";
import Login from "./components/Login";
import Register from "./components/Register";

Vue.use(Router)

const routes = [
    {
        path: '/',
        component: Index,
        name: 'index'
    },
    {
        path: '/login',
        component: Login,
        name: 'login'
    },
    {
        path: '/register',
        component: Register,
        name: 'register'
    },
]

export default new Router({
    mode:'history',
    routes
})
