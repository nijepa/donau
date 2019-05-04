<template>
  <div>
    <div class="card">
      <div v-if="rep" class="card-body">
        <i class="cap-icon ci-compass mb-2 activ" style="cursor: pointer; font-size: 80px"></i>
        <!--<img src="img/person3.jpg" alt="" class="img-fluid rounded-circle w-50 mb-3">-->
        <h3>Zastupanja stranih kompanija</h3>
        <!--<h5 class="text-muted">CEO</h5>-->
        <p>Iskustvo, kao i dugogodišnje poslovanje sa pomenutim evropskim firmama i mnogim drugim Vam garantuju kvalitetnu i fer saradnju.</p>
        <p>Molimo Vas da nam se obratite ako imate bilo kakvo pitanje vezano za dole navedene firme ili njihove proizvodne programe.</p>
        <p>Jedna od osnovnih karakterisitka i uslova u našem poslovanju jeste kompletan servis koji pružamo na zahtev svih zainteresovanih kupaca u vidu pomoći, asistencije, informacija iz bilo koje od pomenutih oblasti, uzorkovanja, posete tehničara i laboranata, tj. stavljanja u servis svih firmi sa kojima smo potpisali ugovor o ekskluzivnom zastupanju.</p>
        <p>Klikom na nazive firmi možete pročitati detaljniji opis istih, tj. naći dodatne informacije o njihovim proizvodnim programima, učitati tehnička uputstva...</p>
      </div>
      <div v-else class="card">
      <div class="card-body">
        <i class="cap-icon ci-compass mb-2 activ" style="cursor: pointer; font-size: 80px"></i>
        <!--<img src="img/person3.jpg" alt="" class="img-fluid rounded-circle w-50 mb-3">-->
        <h3>brrrr</h3>
        <!--<h5 class="text-muted">CEO</h5>-->
        <p>Iskustvo, kao i dugogodišnje poslovanje sa pomenutim evropskim firmama i mnogim drugim Vam garantuju kvalitetnu i fer saradnju.</p>
        <p>Molimo Vas da nam se obratite ako imate bilo kakvo pitanje vezano za dole navedene firme ili njihove proizvodne programe.</p>
        <p>Jedna od osnovnih karakterisitka i uslova u našem poslovanju jeste kompletan servis koji pružamo na zahtev svih zainteresovanih kupaca u vidu pomoći, asistencije, informacija iz bilo koje od pomenutih oblasti, uzorkovanja, posete tehničara i laboranata, tj. stavljanja u servis svih firmi sa kojima smo potpisali ugovor o ekskluzivnom zastupanju.</p>
        <p>Klikom na nazive firmi možete pročitati detaljniji opis istih, tj. naći dodatne informacije o njihovim proizvodnim programima, učitati tehnička uputstva...</p>

      </div>
    </div>
  </div>
</template>

<script>
  import { mapGetters, mapActions } from 'vuex';
  export default {
    name: "Company",
    computed: mapGetters(['allReps']),
    methods: {
        ...mapActions(['fetchReps', 'singleRep'])
    },
    created() {
      this.singleRep();
    }
  }
</script>