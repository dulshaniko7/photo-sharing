import Vue from 'vue';
import Router from 'vue-router';
import Index from "./components/Index";
import Login from "./components/Login";
import Register from "./components/Register";
import Forget from "./components/Forget";
import albumAdd from "./components/pages/albumAdd";
import dashboard from "./components/pages/dashboard";
import albumIndex from "./components/pages/albumIndex";

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
    {
        path: '/forget',
        component: Forget,
        name: 'forget'
    },
    {
        path: '/album',
        component: albumAdd,
        name: 'albumAdd'
    },
    {
        path: '/albums',
        component: albumIndex,
        name: 'albumIndex'
    },
    {
        path: '/dashboard',
        component: dashboard,
        name: 'dashboard'
    },
]

export default new Router({
    mode:'history',
    routes
})
