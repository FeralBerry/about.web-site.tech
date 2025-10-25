import LoginComponent from "@/Components/Auth/LoginComponent.vue";
import RegisterComponent from "@/Components/Auth/RegisterComponent.vue";
import FrontMainComponent from "@/Components/front/FrontMainComponent.vue";


const routes = [
    {
        path: '/',
        component: FrontMainComponent,
        name: 'front.index'
    },
    {
        path: '/login',
        component: LoginComponent,
        name: 'front.login'
    },
    {
        path: '/register',
        component: RegisterComponent,
        name: 'front.register'
    }
]
export default routes
