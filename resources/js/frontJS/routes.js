import LoginComponent from "@/Components/Auth/LoginComponent.vue";
import RegisterComponent from "@/Components/Auth/RegisterComponent.vue";
import FrontMainComponent from "@/Components/front/FrontMainComponent.vue";
import BlogArticle from "@/Components/front/Sections/BlogArticle.vue";
import Blog from "@/Components/front/Sections/Blog.vue";



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
    },
    {
        path: '/blog',
        component: Blog,
        name: 'front.blog'
    },
    {
        path: '/blog/:id',
        component: BlogArticle,
        name: 'front.blog.article'
    }
]
export default routes
