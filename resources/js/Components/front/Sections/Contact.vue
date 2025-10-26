<template>
    <section id="section-contact" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="heading-title">{{ this.$parent.$parent.$parent.contact }}</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6 wow fadeInRight">
                    <div class="contact-form">
                        <form class="contact-box">
                            <div class="form-group">
                                <label>Name*</label>
                                <input type="text" id="contact_name" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Email address*</label>
                                <input type="text" id="contact_email" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Message*</label>
                                <textarea rows="5" class="form-control" id="contact_mess" style="min-height: 100px"></textarea>
                            </div>
                        </form>
                        <div id="contact_error">

                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <a @click="sendContactForm()" class="btn btn-default">{{ this.$parent.$parent.$parent.send }}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 wow fadeInLeft">
                    <div class="contact-left">
                        <template v-for="quote in quotes">
                            <template v-if="this.$parent.$parent.$parent === 'ru'">
                                <p v-html="quote.text_ru"></p>
                            </template>
                            <template v-else>
                                <p v-html="quote.text_en"></p>
                            </template>
                        </template>
                        <ul>
                            <li><span>Email :</span> <a href="mailto:support@web-site.tech">support@web-site.tech</a></li>
                            <li><span>Phone :</span> <a href="tel:+79687106270">+7 (968) 710-62-70</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
<script>
import {defineComponent} from "vue";

export default defineComponent({
    data(){
        return{
            quotes:null,
            canSend:true
        }
    },
    components: {},
    mounted() {
        this.getQuotes()
    },
    methods:{
        getQuotes(){
            axios.post('/api/get/quotes')
                .then((res) => {
                    if(res.data.length > 0){
                        this.quotes = res.data
                    }
                })
        },
        sendContactForm(){
            let name = document.getElementById('contact_name').value
            let email = document.getElementById('contact_email').value
            let mess = document.getElementById('contact_mess').value
            let data = {
                'name': name,
                'email': email,
                'mess': mess
            }
            let error = document.getElementById('contact_error')
            if(this.canSend){
                this.canSend = false
                axios.post('/api/send_contact',data)
                    .then((res) => {
                        if(res.data.error == null){
                            error.innerHTML = "<span class='fadeInLeft' style='color:green'>"+ res.data.success+"</span>"
                            setTimeout(() => {
                                error.innerHTML = ""
                            },5000)
                        } else{
                            error.innerHTML = "<span  class='fadeInLeft' style='color:red'>"+ res.data.error+"</span>"
                            setTimeout(() => {
                                error.innerHTML = ""
                            }, 5000)
                        }
                        setTimeout(() => {
                            this.canSend = true
                        },3000)
                    })
            }

        }
    }
})
</script>
<style scoped>

</style>
