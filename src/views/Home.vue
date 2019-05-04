<template>
  <div >
   <!--<img alt="Vue logo" src="../assets/logo.png">-->
	 <transition appear name="sli" mode="out-in">
   	<app-header></app-header>
	 </transition>
	 <transition appear name="slid" mode="out-in">
   	<Carousel></Carousel>
	 </transition>
	 <transition appear name="slide" mode="out-in">
	 	<Activities></Activities>
	 </transition>
	 <faq></faq>
	 <news></news>
	 <products></products>
    <Contact msg="Welcome to Your Vue.js App"/>
    <app-footer></app-footer>
  </div>
</template>

<script>
// @ is an alias to /src
import Header from '@/components/home/Header.vue';
import Footer from '@/components/Footer.vue';
import Contact from '@/components/home/Contact.vue'
import Carousel from '@/components/home/Carousel.vue'
import Activities from '@/components/home/Activities.vue'
import Faq from '@/components/home/Faq.vue'
import Products from '@/components/home/Products.vue'
import News from '@/components/home/News.vue'

export default {
	name: 'home',
  components: {
    appHeader: Header,
    appFooter: Footer,
    Contact,
		Carousel,
		Activities,
		Faq,
		Products,
		News
  }
}
</script>
<style>
  body {
    height: 100%;
		/*padding: 30px;*/
	}
	.slide-enter-active {
		animation: slide-in 800ms ease-out forwards;
	}
	.slide-leave-active {
		animation: slide-out 800ms ease-out forwards;
	}

	.slid-enter-active {
		animation: slid-in 800ms ease-out forwards;
	}
	.slid-leave-active {
		animation: slid-out 800ms ease-out forwards;
	}

	.sli-enter-active {
		animation: sli-in 800ms ease-out forwards;
	}
	.sli-leave-active {
		animation: sli-out 800ms ease-out forwards;
	}


	@keyframes slide-in {
		from {
			transform: translateX(-30px);
			opacity: 0;
		}
		to {
			transform: translateX(0);
			opacity: 1;
		}
	}

	@keyframes slide-out {
		from {
			transform: translateX(0);
			opacity: 1;
		}
		to {
			transform: translateX(-30px);
			opacity: 0;
		}
	}

	@keyframes slid-in {
		from {
			transform: translateX(30px);
			opacity: 0;
		}
		to {
			transform: translateX(0);
			opacity: 1;
		}
	}

	@keyframes slid-out {
		from {
			transform: translateX(0);
			opacity: 1;
		}
		to {
			transform: translateX(30px);
			opacity: 0;
		}
	}

	@keyframes sli-in {
		from {
			transform: translateY(-30px);
			opacity: 0;
		}
		to {
			transform: translateY(0);
			opacity: 1;
		}
	}

	@keyframes sli-out {
		from {
			transform: translateY(0);
			opacity: 1;
		}
		to {
			transform: translateY(-30px);
			opacity: 0;
		}
	}
</style>