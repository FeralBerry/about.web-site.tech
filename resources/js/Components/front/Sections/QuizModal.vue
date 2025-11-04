<template>
    <div v-if="this.$parent.visible" @click="this.$parent.visible = false" style="background-color: rgba(44,44,44,0.5); width: 100%; height: 100%;z-index: 999; position: fixed; top: 0; left: 0;">

    </div>
    <div v-if="this.$parent.visible" style="top: 10%;left: 10%;width: 80%; height: 80%;z-index: 999999; position: fixed">
        <div style="background-color: #fff;position: absolute;text-align: center; width: 100%;height: 100%; overflow-y: auto">
            <a @click="closeQuiz()" style="font-size: 30px;right: 10px;top: 10px; position: absolute;z-index: 999999" title="Close Modal">X</a>
            <div class="container">
                <transition name="view">
                    <div v-if="this.$parent.quiz_id === '1'" class="col-md-12" style="position: absolute;left: 0;top:0">
                        <div class="row">
                            <div class="container">
                                <h2>Какой вид услуг Вас интересует?</h2>
                                <p>При обращении через данный квиз ваш ждет скидка.</p>
                                <div class="row" style="text-align: left; font-size: 18px;">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <img :src="'/front/img/quiz/1.jpg'" style="width: 100%;height: 100%">
                                            </div>
                                            <div class="col-md-4">
                                                <div class="col-md-12 button-margin">
                                                    <label @click="switchQuiz()">
                                                        <input type="radio" name="type_work" value="2">
                                                        <div class="btn btn-sık"><span>Разработка сайта</span></div>
                                                    </label>
                                                </div>
                                                <div class="col-md-12 button-margin">
                                                    <label @click="switchQuiz()">
                                                        <input type="radio" name="type_work" value="11">
                                                        <div class="btn btn-sık"><span>Настройка рекламы и SEO</span></div>
                                                    </label>
                                                </div>
                                                <div class="col-md-12 button-margin">
                                                    <label @click="switchQuiz()">
                                                        <input type="radio" name="type_work" value="3">
                                                        <div class="btn btn-sık"><span>Доработка существующего сайта</span></div>
                                                    </label>
                                                </div>
                                                <div class="col-md-12 button-margin">
                                                    <label @click="switchQuiz()">
                                                        <input type="radio" name="type_work" value="10">
                                                        <div  class="btn btn-sık"><span>Создание телеграмм бота</span></div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </transition>
                <transition name="view">
                <div v-if="this.$parent.quiz_id === '2'" class="col-md-12" style="position: absolute;left: 0;top:0">
                    <div class="row">
                        <div class="container">
                            <h2>Какой вид сайта Вас интересует?</h2>
                            <div class="row" style="text-align: left; font-size: 18px;">
                                <div class="col-md-12">
                                    <label @click="switchQuiz()">
                                        <input type="radio" name="type_work" value="6">
                                        <div class="btn btn-sık"><span>Визитка</span></div>
                                    </label>
                                </div>
                                <div class="col-md-12">
                                    <label @click="switchQuiz()">
                                        <input type="radio" name="type_work" value="7">
                                        <div class="btn btn-sık"><span>Одностраничный</span></div>
                                    </label>
                                </div>
                                <div class="col-md-12">
                                    <label @click="switchQuiz()">
                                        <input type="radio" name="type_work" value="8">
                                        <div class="btn btn-sık"><span>Магазин</span></div>
                                    </label>
                                </div>
                                <div class="col-md-12">
                                    <label @click="switchQuiz()">
                                        <input type="radio" name="type_work" value="9">
                                        <div class="btn btn-sık"><span>Корпаративный</span></div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </transition>
                <transition name="view">
                <div v-if="this.$parent.quiz_id === '3'" class="col-md-12" style="position: absolute;left: 0;top:0">
                    <div class="container" style="padding: 30px">
                        <div class="row">
                            <h2>Опишите что Вам нужно доделать, <br>Оставьте свои контакты </h2>
                            <p>В ближайшее время я с Вами свяжусь.</p>
                            <div class="col-md-12">
                                <div class="col-md-4">
                                    <label for="site_problems_name">Как к Вам обращаться</label>
                                    <input type="text" id="site_problems_name" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="site_problems_phone">Телефон для связи</label>
                                    <input type="tel" id="site_problems_phone" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="site_problems_email">Email для связи</label>
                                    <input type="text" id="site_problems_email" class="form-control">
                                </div>
                                <label for="site_problems_text">Описание проблемы</label>
                                <textarea rows="5" id="site_problems_text" class="form-control"></textarea>
                                <br>
                                <button @click="siteProblem()" style="background-color: #002037;" class="btn btn-default">Отправить</button>
                            </div>
                        </div>
                    </div>
                </div>
                </transition>
                <transition name="view">
                    <div v-if="this.$parent.quiz_id === '10' || this.$parent.quiz_id === '11'" class="col-md-12" style="position: absolute;left: 0;top:0">
                        <div class="container" style="padding: 30px">
                            <div class="row">
                                <h2>Оставьте свои контакты </h2>
                                <p>В ближайшее время я с Вами свяжусь.</p>
                                <div class="col-md-12">
                                    <div class="col-md-4">
                                        <label for="site_problems_name">Как к Вам обращаться</label>
                                        <input type="text" id="quiz_name" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="site_problems_phone">Телефон для связи</label>
                                        <input type="tel" id="quiz_phone" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="site_problems_email">Email для связи</label>
                                        <input type="text" id="quiz_email" class="form-control">
                                    </div>
                                </div>
                                <br>
                                <button style="background-color: #002037;" class="btn btn-default">Отправить</button>
                            </div>
                        </div>
                    </div>
                </transition>
                <transition name="view">
                <div v-if="this.$parent.quiz_id === '0'" class="col-md-12" style="position: absolute;left: 0;top:0">
                    <div class="container" style="padding: 30px">
                        <div class="row">
                            <h2>Оставьте свои контакты для связи</h2>
                            <p>Обычно выхожу на связь в течении часа, если не в ночное время. Достаточно 1 способа связи.</p>
                            <div class="col-md-12">
                                <div class="col-md-12">
                                    <label>Как к Вам обращаться*</label>
                                    <input type="text" id="quiz_name" class="form-control" required>
                                </div>
                                <div class="col-md-12">
                                    <label>Ваш телефон</label>
                                    <input type="text" id="quiz_phone" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label>Ваш email</label>
                                    <input type="text" id="quiz_email" class="form-control">
                                </div>
                                <div class="col-md-12 button-margin">
                                    <label @click="endQuiz()">
                                        <input type="radio" name="type_work" value="0">
                                        <div class="btn btn-sık"><span>Отправить</span></div>
                                    </label>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                </transition>
            </div>
        </div>
    </div>
</template>
<script>
import {defineComponent} from "vue";

export default defineComponent({
    data(){
        return {
            id:0
        }
    },
    components: {},
    mounted() {

    },
    methods:{
        switchQuiz(){
            let radios = document.getElementsByName('type_work')
            let site_problems = document.getElementById('site_problems')
            for (let i = 0; i < radios.length; i++) {
                if(radios[i].checked){
                    this.$parent.quiz_id = radios[i].value
                    console.log(radios[i].value)
                }
            }
        },
        siteProblem(){
            let site_problems_name = document.getElementById('site_problems_name').value
            let site_problems_phone = document.getElementById('site_problems_phone').value
            let site_problems_email = document.getElementById('site_problems_email').value
            let site_problems_text = document.getElementById('site_problems_text').value
            let data = {
                site_problems_name: site_problems_name,
                site_problems_phone: site_problems_phone,
                site_problems_email: site_problems_email,
                site_problems_text: site_problems_text,
            }
            axios.post('/api/site_problems',data).then((res) => {
                this.$parent.visible = false
                this.$parent.quiz_id = null
            })
        },
        closeQuiz(){
            this.$parent.visible = false
            this.$parent.quiz_id = null
        },
        endQuiz(){
            let name = document.getElementById('quiz_name').value
            let email = document.getElementById('quiz_email').value
            let phone = document.getElementById('quiz_phone').value

            this.$parent.visible = false
            this.$parent.quiz_id = null
        }
    }
})
</script>
<style>
.view-enter-active {
    animation: view-in 0.6s;
}
.view-leave-active {
    animation: view-out 0.6s;
}
@keyframes view-in {
    0%   { transform: scale(0.5); opacity: 0;}
    100% { transform: scale(1); opacity: 1;}
}
@keyframes view-out {
    0%   { transform: scale(1); opacity: 1;}
    100% { transform: scale(1.2); opacity: 0;}
}


label {
    position: relative;
    display: inline-block;
    text-align: center;
}


.btn-sık {
    transition: all 0.2s ease;
    background-color: white ;
    border: 2px solid #013d69 !important;
    box-shadow: 0 3px #002037 !important;
    min-width: 150px;
    border-radius: 20px;
}




input[type="radio"] {
    position: absolute;
    visibility: hidden;
}
input[type="radio"] + div {
    position: relative;
}
input[type="radio"]:checked + div {
    background-color: #002037;
}
input[type="radio"]:checked + div>span {
    color: white;
}
input[type="radio"] + div>span {
    position: relative;
    top: 25%;}

input[type="checkbox"] {
    position: absolute;
    visibility: hidden;
}

input[type="checkbox"] + div {
    position: relative;
}
input[type="checkbox"]:checked + div {
    background-color: #002037;
}
input[type="checkbox"]:checked + div>span {
    color: white;
}
input[type="checkbox"] + div>span {
    position: relative;
    top: 25%;}

input[type="checkbox"]:checked + div::before {
    content:"✔";
    position: absolute;
    bottom: 18px;
    right: 0px;
    font-size: 21px;
    color: white;
}

input[type="radio"]:checked + div::before {
    font-family: FontAwesome,serif;
    content: "\f08d";
    position: absolute;
    bottom: 31px;
    font-size: 21px;
    color: red;
    right: -5px;
    -webkit-transform: rotate(30deg);
    -moz-transform: rotate(30deg);
    -o-transform: rotate(30deg);
    -ms-transform: rotate(30deg);
    transform: rotate(30deg);
    animation: fall 0.5s forwards;
}

@keyframes fall {
    100% {
        -webkit-transform: translate(-5px,5px) rotate(30deg);
        -moz-transform: translate(-5px,5px) rotate(30deg);
        -o-transform: translate(-5px,5px) rotate(30deg);
        -ms-transform: translate(-5px,5px) rotate(30deg);
        transform: translate(-5px,5px) rotate(30deg);
    }
}

@-moz-keyframes fall {
    100% {
        -webkit-transform: translate(-5px,5px) rotate(30deg);
        -moz-transform: translate(-5px,5px) rotate(30deg);
        -o-transform: translate(-5px,5px) rotate(30deg);
        -ms-transform: translate(-5px,5px) rotate(30deg);
        transform: translate(-5px,5px) rotate(30deg);
    }
}

@-webkit-keyframes fall {
    100% {
        -webkit-transform: translate(-5px,5px) rotate(30deg);
        -moz-transform: translate(-5px,5px) rotate(30deg);
        -o-transform: translate(-5px,5px) rotate(30deg);
        -ms-transform: translate(-5px,5px) rotate(30deg);
        transform: translate(-5px,5px) rotate(30deg);
    }
}
.button-margin{
    margin-top: 10px;
}
</style>
