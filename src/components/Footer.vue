<template>
  <footer id="main-footer" class=" bg-primary text-white">
    <div data-aos="zoom-in-up">
    <div class="container-fluid">
      <div class="row text-center">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <p class="lead">
            Copyright ©{{ new Date().getFullYear() }} DONAU
            <!--<span id="year"></span>-->
          </p>
        </div>
      </div>
      <div class="row text-center mb-3">
        <div class="col" :key="owner.id" v-for="owner in allOwner">
        <p>Adresa: {{owner.address}} &#8605; Telefon: <a :href="'tel:'+ owner.phone">{{owner.phone}}</a> &#8605; Email: <a href="mailto:someone@example.com?Subject=Hello%20again" target="_top">{{ owner.email }}</a> &#8605; <a :href="owner.skype"><i class="cap-icon ci-skype m-1 cont"></i></a> &#8605; <a :href="owner.watsup"><i class="cap-icon ci-whatsapp m-1 cont"></i></a></p>
        </div>
      </div>
      <div class="row text-center">
        <div class="col" :key="owner.id" v-for="owner in allOwner">
          <a :href="owner.facebook"><i @mouseover="hover1 = true" @mouseleave="hover1 = false" :class="{'cap-icon ci-facebook-squared m-2': hover1 == false, 'cap-icon ci-facebook-circled m-2': hover1 == true}"></i></a>
          <a :href="owner.gplus"><i @mouseover="hover2 = true" @mouseleave="hover2 = false" :class="{'cap-icon ci-google-plus-squared m-2': hover2 == false, 'cap-icon ci-google-plus-circled m-2': hover2 == true}"></i></a>
          <a :href="owner.linkedin"><i @mouseover="hover3 = true" @mouseleave="hover3 = false" :class="{'cap-icon ci-linkedin-squared m-2': hover3 == false, 'cap-icon ci-linkedin-circled m-2': hover3 == true}"></i></a>
          <a :href="owner.twitter"><i @mouseover="hover4 = true" @mouseleave="hover4 = false" :class="{'cap-icon ci-twitter-squared m-2': hover4 == false, 'cap-icon ci-twitter-circled m-2': hover4 == true}" ></i></a>
        </div>
      </div>
    </div>
    </div>
  </footer>
</template>

<script>
  import { mapGetters, mapActions } from 'vuex';
  export default {
    name: "Footer",
    data() {
      return {
        hover1: false,
        hover2: false,
        hover3: false,
        hover4: false,
      }
    },
    name: "Owner",
    computed: mapGetters(['allOwner']),
    methods: {
      ...mapActions(['fetchOwner'])
    },
    created() {
      this.fetchOwner();
    }
  }
</script>

<style scoped>
  i {
    font-size: 50px;
    cursor: pointer;
  }
  a {
    color: white;
    text-decoration: none;
  }
  a:hover {
    color: aquamarine;
  }
  .cont {
    font-size: 20px;
  }
</style>