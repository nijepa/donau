<template>
  <hooper :itemsToShow="1.75" :centerMode="true" :infiniteScroll="true" :autoPlay="true" :playSpeed="5000" class="hoop">
    <slide :key="news.id" v-for="news in allNews">
      <div >
        <img :src="'../img/news/' + news.photo_id" class="img-fluid ">
        <h4 class="text-dark text-center">{{news.title}}</h4>
        <p class="lead text-dark text-center">{{news.description}}</p>
      </div>
    </slide>
    <hooper-navigation class="text-primary" slot="hooper-addons"></hooper-navigation>
    <hooper-pagination slot="hooper-addons"></hooper-pagination>
    <hooper-progress slot="hooper-addons"></hooper-progress>
  </hooper>
</template>

<script>
  import { 
    Hooper, 
    Slide,
    Progress as HooperProgress,
    Pagination as HooperPagination,
    Navigation as HooperNavigation
    } from 'hooper';
  import 'hooper/dist/hooper.css';
  import { mapGetters, mapActions } from 'vuex';
  export default {
    name: 'News',
    components: {
      Hooper,
      Slide,
      HooperProgress,
      HooperPagination,
      HooperNavigation
    },
    computed: mapGetters(['allNews']),
    methods: {
      ...mapActions(['fetchNews'])
    },
    created() {
      this.fetchNews();
    }
  }
</script>

<style scoped>
  @media(min-width: 768px) {
    .hoop {
      height: 550px;
    }

  }
</style>