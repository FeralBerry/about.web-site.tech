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
            education_title: '',
            work_exp_title: '',
            work_exp_text: '',
            education_text: '',
            resume_text: '',
            portfolio_desc: '',
            download_resume: '',
            quiz_survey: '',
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
                this.education_title = this.ru['education_title']
                this.education_text = this.ru['education_text']
                this.work_exp_title = this.ru['work_exp_title']
                this.work_exp_text = this.ru['education_text']
                this.resume_text = this.ru['resume_text']
                this.portfolio_desc = this.ru['portfolio_desc']
                this.download_resume = this.ru['download_resume']
                this.quiz_survey = this.ru['quiz_survey']
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
                this.education_title = this.en['education_title']
                this.education_text = this.en['education_text']
                this.work_exp_title = this.en['work_exp_title']
                this.work_exp_text = this.en['education_text']
                this.resume_text = this.en['resume_text']
                this.portfolio_desc = this.en['portfolio_desc']
                this.download_resume = this.en['download_resume']
                this.quiz_survey = this.en['quiz_survey']
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
                this.education_title = this.en['education_title']
                this.work_exp_title = this.en['work_exp_title']
                this.education_text = this.en['education_text']
                this.work_exp_text = this.en['work_exp_text']
                this.resume_text = this.en['resume_text']
                this.portfolio_desc = this.en['portfolio_desc']
                this.download_resume = this.en['download_resume']
                this.quiz_survey = this.en['quiz_survey']
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
                this.education_title = this.ru['education_title']
                this.work_exp_title = this.ru['work_exp_title']
                this.education_text = this.ru['education_text']
                this.work_exp_text = this.ru['work_exp_text']
                this.resume_text = this.ru['resume_text']
                this.portfolio_desc = this.ru['portfolio_desc']
                this.download_resume = this.ru['download_resume']
                this.quiz_survey = this.ru['quiz_survey']
            }
        }
    }
})
</script>
<style>

</style>
