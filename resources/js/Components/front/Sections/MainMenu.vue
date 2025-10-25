<template>
    <section class="section-menu">
        <div class="navbar navbar-default main-nav" role="navigation" id="main-menu">
            <div class="container" >
                <div class="navbar-header">
                    <button class="navbar-toggle collapsed" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse">
                        <span class="sr-only"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a href="#" class="navbar-brand">I am ~</a>
                </div>  <!-- navbar-header end -->
                <!-- main nav  -->

                <div class="collapse navbar-collapse navigation" id="bs-example-navbar-collapse-1" role="navigation">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="#section-banner">{{ this.$parent.$parent.home }} </a></li>
                        <li><a href="#section-profile">{{ this.$parent.$parent.about }} </a></li>
                        <li><a href="#section-skill">{{ this.$parent.$parent.skills }} </a></li>
                        <li><a href="#section-resume">{{ this.$parent.$parent.resume }} </a></li>
                        <li><a href="#section-testimonial">{{ this.$parent.$parent.testimonials }} </a></li>
                        <li><a href="#section-portfolio">{{ this.$parent.$parent.portfolio }} </a></li>
                        <li><a href="#section-contact">{{ this.$parent.$parent.contact }} </a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </div>
    </section>
</template>
<script>
import {defineComponent} from "vue";

export default defineComponent({
    data(){
        return {

        }
    },
    components: {},
    mounted() {
        window.addEventListener('scroll', () => {
            let section_banner = document.getElementById('section-banner')
            let element = document.getElementById('main-menu')
            if(section_banner.offsetHeight < -section_banner.getBoundingClientRect().top){
                element.style.cssText = 'position:fixed;top:0;';
            } else {
                element.style.cssText = '';
            }
        })
    },
    methods:{

    }
})
</script>
<style scoped>

</style>
