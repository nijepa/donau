<template>
  <section id="home-heading" class="p-5">
    <div class="dark-overlay">
      <div data-aos="zoom-in">
        <div class="row align-items-center">
          <div class="col-md-4 text-center align-self-center">
            <router-link to="/representations" activeClass="active" tag="li" class="nav-link" href="#" id="navbarDropdown" role="button"><i class="cap-icon ci-compass activ" style="cursor: pointer"></i>
            <h3 style="cursor: pointer">Zastupanja</h3></router-link>
            <!--<p>Obezbeđujemo kompletan repromaterijal od poznatih svetskih proizvođača sirovina za keramičku industriju, industriju proizvođača peći i kamina, kao i sirovine i aditive razne druge oblasti.</p>-->
          </div>
          <div class="col-md-4 text-center align-self-center" >
            <i class="cap-icon ci-refresh mb-2 activ" style="cursor: pointer"></i>
            <h3>Uvoz / Izvoz</h3>
            <!--<p>Sarađujemo sa domaćim livnicama za koje sa stranim partnerima započinjemo zajedničke poslove sa obezbeđenim ino-plasmanom. Pored livaca sarađujemo i sa PVC, keramičkom industrijom, proizvođačima peći i kamina i mnogim drugim..</p>-->
          </div>
          <div class="col-md-4 text-center align-self-center">
            <i class="cap-icon ci-tools mb-2 activ" style="cursor: pointer"></i>
            <h3>Proizvodnja</h3>
            <!--<p>Odlična pozicija, kontakti i ugled u Zapadnoj Evropi i na ruskom tržistu Vam garantuju dobar servis i obezbeđuju neprocenjivu pomoć u slučaju da želite da obezbedite kontakt i dugoročnu uvozno-izvoznu saradnju sa bilo kojom inostranom firmom.</p>-->
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
  export default {
    name: "Activities"
  }
</script>

<style scoped>
  .activ {
    color: white;
    font-size: 80px;
  }
  .activ:hover {
    color:#05618d;
    font-size: 80px;
  }
  .col-md-4 {
  /*position: absolute;*/
    margin-top: 50px; /* account for padding and border if not using box-sizing: border-box; */
  }
</style>