<template>
      <!-- ABOUT / WHY SECTION -->
  <section id="about" class="py-5 text-center bg-light">
    <div class="container" >
      <div data-aos="flip-up">
        <div class="row">
          <div class="col">
            <div class="info-header mb-5">
              <h1 class="text-primary pb-3">
                Zašto DONAU?
              </h1>
              <p class="lead pb-3">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus obcaecati alias rerum dolore fugiat debitis?
              </p>
            </div>

            <!-- ACCORDION -->
            <div id="accordion" :key="about.id" v-for="about in allAbout">
              <div class="card">
                <div class="card-header">
                  <h5 class="mb-0">
                    <div :href="'#collapse' + about.id" data-toggle="collapse" data-parent="#accordion" class="accor"  @click="onAccor(about.id)">
                      <i :class="{'cap-icon ci-arrow-down': clicked2 == false, 'cap-icon ci-arrow-up': clicked2 == true}"></i>  {{about.caption}}
                    </div>
                  </h5>
                </div>

                <div :id="'collapse' + about.id" class="collapse">
                  <div class="card-body">
                    {{ about.description }}
                  </div>
                </div>
              </div>
            </div>
<!--             <div class="card">
              <div class="card-header">
                <h5 class="mb-0">
                  <div href="#collapse2" data-toggle="collapse" data-parent="#accordion">
                    <i @click="clicked2 = !clicked2" :class="{'cap-icon ci-arrow-down': clicked2 == false, 'cap-icon ci-arrow-up': clicked2 == true}"></i> Saradnja
                  </div>
                </h5>
              </div>

              <div id="collapse2" class="collapse">
                <div class="card-body">
                  Sarađujemo sa domaćim livnicama za koje sa stranim partnerima započinjemo zajedničke poslove sa obezbeđenim ino-plasmanom. Pored livaca sarađujemo i sa PVC, keramičkom industrijom, proizvođačima peći i kamina i mnogim drugim.
                </div>
              </div>
            </div> -->

<!--             <div class="card">
              <div class="card-header">
                <h5 class="mb-0">
                  <div href="#collapse3" data-toggle="collapse" data-parent="#accordion">
                    <i @click="clicked3 = !clicked3" :class="{'cap-icon ci-arrow-down': clicked3 == false, 'cap-icon ci-arrow-up': clicked3 == true}"></i> Kontakti
                  </div>
                </h5>
              </div>

              <div id="collapse3" class="collapse">
                <div class="card-body">
                  Odlična pozicija, kontakti i ugled u Zapadnoj Evropi i na ruskom tržistu Vam garantuju dobar servis i obezbeđuju neprocenjivu pomoć u slučaju da želite da obezbedite kontakt i dugoročnu uvozno-izvoznu saradnju sa bilo kojom inostranom firmom.
                </div>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </div>
    <div class="row text-center">
      <div class="col">
        <router-link to="/about" activeClass="active" tag="a" class="btn btn-primary btn-lg mt-3"><a><span>Više ... </span></a></router-link>
      </div>
    </div>
  </section>
</template>

<script>
  import { mapGetters, mapActions } from 'vuex';
  export default {
    name: "Faq",
    data() {
      return {
        show1: '',
        show2: '',
        show2: '',
        clicked1: true,
        clicked2: false,
        clicked3: false,
      }
    },
    computed: mapGetters(['allAbout']),
    methods: {
      ...mapActions(['fetchAbout']),
      onAccor(id) {
        if (id === 1) {
          this.clicked1 = !this.clicked1
        } else if (id === 2) {
          this.clicked2 = !this.clicked2
        } else {
          this.clicked3 = !this.clicked3
        }
      }
    },
    created() {
      this.fetchAbout();
    }
  }
</script>

<style scoped>
    i {
      cursor: pointer;
      color: black;
    }
    i:hover {
      color:#05618d;
    }
    .accor {
      cursor: pointer;
      color: black;
    }
    .accor:hover {
      color:#05618d;
    }
</style>