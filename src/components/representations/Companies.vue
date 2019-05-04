<template>
  <div class="">
    <header id="page-header">
      <div class="container">
        <div class="row">
          <div class="col m-auto text-center  has-overlay">
            <h1>Zastupanja</h1>
            <p>stranih kompanija</p>
          </div>
        </div>
      </div>
    </header>
    <div class="container">
      <div class="row">
        <div class="col-4 my-5">
          <nav @click="getRep(rep)" :key="rep.id" class="nav flex-column list-group" v-for="rep in allReps">
            <a href="#" class="nav-link list-group-item list-group-item-action list-group-item-primary">{{rep.name}} <img :src="'../img/companies/' + rep.logo_small_id" class="img-fluid mx-auto d-block"></a>
          </nav>
        </div>
       
        <div class="col-8 my-5">
          <div class="card">
            <transition name="slide" mode="out-in" appear>
            <div :key="oneRep.id" v-if="oneRep.id" class="card-body">
              <a :href="oneRep.website" target="_blank"><img :src="'../img/companies/' + oneRep.logo_id" class="img-fluid mx-auto d-block"></a>
              <img :src="'../img/companies/' + oneRep.photo_id" alt="" class="img-fluid rounded-circle w-50 my-3 mx-auto d-block">
              <h3>{{oneRep.name}}</h3>
              <h5 class="text-muted">{{oneRep.short_desc}}</h5>
              <p class="my-3" v-html="oneRep.description"></p>
              <div v-if="allRepDet">
                <img :src="'../img/companies/docs/pdfdown.png'" alt="" class="img-fluid my-2">
                <div :key="repDet.id" v-for="repDet in allRepDet">
                  <li><a :href="'../img/companies/docs/' + repDet.doc_id" target="_blank">{{repDet.title}}</a></li>
                </div>
              </div>
            </div>
            <div key=2 v-else class="card-body">
              <i class="cap-icon ci-compass mb-2 activ mx-auto" style="cursor: pointer; font-size: 80px"></i>
              <!--<img src="img/person3.jpg" alt="" class="img-fluid rounded-circle w-50 mb-3">-->
              <h3>Zastupanja stranih kompanija</h3>
              <!--<h5 class="text-muted">CEO</h5>-->
              <p>Iskustvo, kao i dugogodišnje poslovanje sa pomenutim evropskim firmama i mnogim drugim Vam garantuju kvalitetnu i fer saradnju.</p>
              <p>Molimo Vas da nam se obratite ako imate bilo kakvo pitanje vezano za dole navedene firme ili njihove proizvodne programe.</p>
              <p>Jedna od osnovnih karakterisitka i uslova u našem poslovanju jeste kompletan servis koji pružamo na zahtev svih zainteresovanih kupaca u vidu pomoći, asistencije, informacija iz bilo koje od pomenutih oblasti, uzorkovanja, posete tehničara i laboranata, tj. stavljanja u servis svih firmi sa kojima smo potpisali ugovor o ekskluzivnom zastupanju.</p>
              <p>Klikom na nazive firmi možete pročitati detaljniji opis istih, tj. naći dodatne informacije o njihovim proizvodnim programima, učitati tehnička uputstva...</p>
            </div>
            </transition>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  import { mapGetters, mapActions } from 'vuex';
  export default {
    name: "Companies",
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
    },
    destroyed:function(){
      this.resetRepState();
    }
  }
</script>

<style scoped>
  .slide-enter-active {
		animation: slide-in 800ms ease-out forwards;
	}
	.slide-leave-active {
		animation: slide-out 800ms ease-out forwards;
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
</style>