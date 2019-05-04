<template>
  <div class="contact">
    <transition appear name="sli" mode="out-in">
    <appHeader></appHeader> 
    </transition>
    <transition appear name="slid" mode="out-in">
    <appContact></appContact>
    </transition>
    <transition appear name="slide" mode="out-in">
    <appFooter></appFooter>
    </transition>
  </div>
  
</template>

<script>
import Header from '@/components/Header.vue';
import Footer from '@/components/Footer.vue';
import Contact from '@/components/contact/Contact.vue';
export default {
  components: {
    appHeader: Header,
    appFooter: Footer,
    appContact: Contact,
  },
  created() {
    //Scrolls to top when view is displayed
    window.scrollTo(0, 0);
  }
}
</script>