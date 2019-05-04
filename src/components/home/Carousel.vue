<template>
    <!-- SHOWCASE -->
    
    <section id="showcase">

    <div class="carousel slide" id="myCarousel" data-ride="carousel" data-interval="5000">
      <!--<ol class="carousel-indicators">
        <li v-for="(banner,idx) in ban" :class="{ active: idx==0 }" data-target="#myCarousel" :data-slide-to="{idx}"></li>
        
      </ol>-->
 
      <div class="carousel-inner">
        <!-- <div class="carousel-item" v-for="(banner,idx) in ban" :class="{ active: idx==0 }">
          <div class="carousel-caption mb-3">
            <img :src="banner.pic" alt="" class="img-fluid mx-auto d-block">
            <h1 class="display-4 text-dark">{{banner.tex}}</h1>
            <p class="lead text-dark">{{banner.des}}</p>
            <img :src="banner.log" alt="" class="img-fluid mx-auto d-block mt-3">
            <a href="#" class="btn btn-primary btn-lg mt-3"><span>Više ... </span></a>
          </div>
        </div> -->
        <div :key="rep.id" class="carousel-item" v-for="(rep, idx) in allReps" :class="{ active: idx==0 }" >
          <div class="carousel-caption mb-3">
            <img :src="'../img/companies/' + rep.photo_id" class="img-fluid mx-auto d-block">
            <h1 class="display-4 text-dark capsize">{{rep.name}}</h1>
            <p class="lead text-dark">{{rep.email}}</p>
            <img :src="'../img/companies/' + rep.logo_id" alt="" class="img-fluid mx-auto d-block mt-3">
            <a href="#" class="btn btn-primary btn-lg mt-3"><span>Više ... </span></a>
          </div>
        </div>
      </div>
      <a href="#myCarousel" data-slide="prev" class="carousel-control-prev">
        <span class="carousel-control-prev-icon" style="color: blue;"></span>
      </a>
      <a href="#myCarousel" data-slide="next" class="carousel-control-next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
  </section>
</template>

<script>
  import { mapGetters, mapActions } from 'vuex';
  export default {
    name: "Carousel",
    computed: mapGetters(['allReps', 'oneRep', 'allRepDet']),
    methods: {
        ...mapActions(['fetchReps', 'fetchRep', 'resetRepState', 'fetchRepDet']),
        getRep(rep) {
          const selRep = rep;
          this.fetchRep(selRep);
          this.fetchRepDet(selRep);
        }
      },
      created() {
        this.fetchReps();
      }
  }
</script>

<style scoped>

</style>