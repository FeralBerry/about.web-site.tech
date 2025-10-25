<template>
    <header-component></header-component>
    <router-view>

    </router-view>
    <footer-component></footer-component>
</template>
<script>

import {defineComponent} from "vue";
import HeaderComponent from "@/Components/front/Markup/HeaderComponent.vue";
import FooterComponent from "@/Components/front/Markup/FooterComponent.vue";
import ru from "../../lang/ru.json"
import en from "../../lang/en.json"
export default defineComponent({
    data(){
        return {
            auth: false,
            lang: navigator.language,
            learn_more: '',
            banner_text: '',
            home: '',
            about: '',
            skills: '',
            portfolio: '',
            contact: '',
            resume: '',
            testimonials: '',
            send: '',
            ru:'',
            en:''
        }
    },
    components: {FooterComponent, HeaderComponent},
    mounted() {
        this.ru = ru
        this.en = en
        this.checkAuth();
        setTimeout(() => {
            if(this.lang === 'ru'){
                this.learn_more = this.ru['learn_more']
                this.banner_text = this.ru['banner_text']
                this.home = this.ru['home']
                this.about = this.ru['about']
                this.portfolio = this.ru['portfolio']
                this.skills = this.ru['skills']
                this.contact = this.ru['contact']
                this.resume = this.ru['resume']
                this.testimonials = this.ru['testimonials']
                this.send = this.ru['send']
            }
            else if(this.lang === 'en'){
                this.learn_more = this.en['learn_more']
                this.banner_text = this.en['banner_text']
                this.home = this.en['home']
                this.about = this.en['about']
                this.portfolio = this.en['portfolio']
                this.skills = this.en['skills']
                this.contact = this.en['contact']
                this.resume = this.en['resume']
                this.testimonials = this.en['testimonials']
                this.send = this.en['send']
            }
        },100)
    },
    methods:{
        checkAuth(){
            axios.post('/check_auth')
                .then((res) => {
                    this.auth = res.data !== 0;
                })
        },
        changeLang(){
            if(this.lang === 'ru'){
                this.lang = 'en'
                this.learn_more = this.en['learn_more']
                this.banner_text = this.en['banner_text']
                this.home = this.en['home']
                this.about = this.en['about']
                this.portfolio = this.en['portfolio']
                this.skills = this.en['skills']
                this.contact = this.en['contact']
                this.resume = this.en['resume']
                this.testimonials = this.en['testimonials']
                this.send = this.en['send']
            }
            else if(this.lang === 'en'){
                this.lang = 'ru'
                this.learn_more = this.ru['learn_more']
                this.banner_text = this.ru['banner_text']
                this.home = this.ru['home']
                this.about = this.ru['about']
                this.portfolio = this.ru['portfolio']
                this.skills = this.ru['skills']
                this.contact = this.ru['contact']
                this.resume = this.ru['resume']
                this.testimonials = this.ru['testimonials']
                this.send = this.ru['send']
            }
        }
    }
})
</script>
<style>

</style>
