<template>
  <div>
    <header id="page-header">
      <div class="container">
        <div class="row">
          <div class="col m-auto text-center  has-overlay">
            <h1>Kontakt</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam reprehenderit neque assumenda id laboriosam placeat?</p>
          </div>
        </div>
      </div>
    </header>

    <section id="contact" class="py-3">
      <div class="container">
        <div class="row">
          
          <div class="col-md-4">
            <div data-aos="fade-down-right">
            <div class="card p-4">
              <div class="card-body" :key="owner.id" v-for="owner in allOwner">
                <h4>Kontaktirajte nas</h4>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit ad laboriosam eligendi mollitia magni explicabo?</p>
                <h4>Adresa</h4>
                <p>{{owner.address}}</p>
                <h4>Email</h4>
                <p>{{owner.email}}</p>
                <h4>Telefon</h4>
                <p>{{owner.phone}}</p>
              </div>
            </div>
          </div>
          </div>
          
          <div class="col-md-8">
            <div data-aos="fade-down-left">
            <div class="card p-4">
              <div class="card-body">
                <h3 class="text-center">Please fill out this form to contact us</h3>
                <hr>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Ime">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Prezime">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Email">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Telefon">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <textarea class="form-control" placeholder="Poruka"></textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <input type="submit" value="Potvrdite" class="btn btn-primary btn-block">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>  
          </div>
        </div>
      </div>
    </section>

    <section id="map">
      <div data-aos="flip-right">
        <div class="container">
          <div class="row py-3">
            <iframe class="col-lg-12 col-md-12 col-sm-12" src="https://www.google.com/maps/d/u/0/embed?mid=1cl4X-krGn9xQso6ANUk96DyCOa4" width="1920" height="480" frameborder="0"></iframe>
          </div>
        </div>
      </div>
    </section>

    <section id="staff" class="py-5 text-center bg-dark text-white">
      <div class="container">
        <h1>Naš tim</h1>
        <hr>
        <div class="row">
          <div class="col-md-4" :key="contact.id" v-for="contact in allContacts">
            <div data-aos="zoom-out-up">
            <img src="img/person1.jpg" alt="" class="img-fluid rounded-circle mb-2">
            <h4>{{contact.name}}</h4>
            <h5 class="text-muted">{{contact.title}}</h5>
            <div class="d-flex justify-content-center">
              <a :href="'mailto:' + contact.email"><i @mouseover="hover1 = true" @mouseleave="hover1 = false" :class="{'cap-icon ci-envelope m-2': hover1 == false, 'cap-icon ci-envelope-out m-2': hover1 == true}"></i></a>
              <a :href="'tel:'+ contact.phone"><i @mouseover="hover2 = true" @mouseleave="hover2 = false" :class="{'cap-icon ci-mobile m-2': hover2 == false, 'cap-icon ci-phone m-2': hover2 == true}"></i></a>
              <a :href="'tel:'+ contact.whatsapp"><i @mouseover="hover3 = true" @mouseleave="hover3 = false" :class="{'cap-icon ci-whatsapp-squared m-2': hover3 == false, 'cap-icon ci-whatsapp-circled m-2': hover3 == true}"></i></a>
              <a :href="contact.facebook" target="_top"><i @mouseover="hover4 = true" @mouseleave="hover4 = false" :class="{'cap-icon ci-facebook-squared m-2': hover4 == false, 'cap-icon ci-facebook-circled m-2': hover4 == true}"></i></a>
            </div>
            </div>
          </div>
   
          <!-- <div class="col-md-3">
            <img src="img/person2.jpg" alt="" class="img-fluid rounded-circle mb-2">
            <h4>Sara Williams</h4>
            <small>Business Manager</small>
          </div>
          <div class="col-md-3">
            <img src="img/person3.jpg" alt="" class="img-fluid rounded-circle mb-2">
            <h4>John Doe</h4>
            <small>CEO</small>
          </div>
          <div class="col-md-3">
            <img src="img/person4.jpg" alt="" class="img-fluid rounded-circle mb-2">
            <h4>Steve Smith</h4>
            <small>Web Developer</small>
          </div> -->
        </div>
      </div>
    </section>
  </div>
</template>

<script>
  import { mapGetters, mapActions } from 'vuex';
  export default {
    name: "Contact",
    data() {
    return {
      hover1: false,
      hover2: false,
      hover3: false,
      hover4: false,
    }
  },
    computed: mapGetters(['allOwner', 'allContacts']),
    methods: {
      ...mapActions(['fetchOwner', 'fetchContacts'])
    },
    created() {
      this.fetchOwner();
      this.fetchContacts();
    }
  }
</script>

<style scoped>
  a {
    color: ghostwhite;
    text-decoration: none;
    font-size: 1.5rem;
  }
</style>