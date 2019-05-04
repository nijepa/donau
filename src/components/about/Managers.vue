<template>
  <div>
    <section id="authors" class="my-5 text-center">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="info-header mb-5">
              <h1 class="text-primary pb-3">
                Naši tuljani
              </h1>
              <p class="lead">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias laborum numquam aperiam dolores a porro!
              </p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-4">
            <div class="card">
              <div class="card-body">
                <img src="img/person3.jpg" alt="" class="img-fluid rounded-circle w-50 mb-3">
                <h3>Radovan Ranđić</h3>
                <h5 class="text-muted">CEO</h5>
                <div class="d-flex justify-content-center">
                  <i @mouseover="hover1 = true" @mouseleave="hover1 = false" :class="{'cap-icon ci-envelope m-2': hover1 == false, 'cap-icon ci-envelope-out m-2': hover1 == true}"></i>
                  <i @mouseover="hover2 = true" @mouseleave="hover2 = false" :class="{'cap-icon ci-mobile m-2': hover2 == false, 'cap-icon ci-phone m-2': hover2 == true}"></i>
                  <i @mouseover="hover3 = true" @mouseleave="hover3 = false" :class="{'cap-icon ci-whatsapp-squared m-2': hover3 == false, 'cap-icon ci-whatsapp-circled m-2': hover3 == true}"></i>
                  <i @mouseover="hover4 = true" @mouseleave="hover4 = false" :class="{'cap-icon ci-facebook-squared m-2': hover4 == false, 'cap-icon ci-facebook-circled m-2': hover4 == true}"></i>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="card">
              <div class="card-body">
                <img src="img/person4.jpg" alt="" class="img-fluid rounded-circle w-50 mb-3">
                <h3>Nemanja Ranđić</h3>
                <h5 class="text-muted">Diša</h5>
                <div class="d-flex justify-content-center">
                  <i @mouseover="hover1 = true" @mouseleave="hover1 = false" :class="{'cap-icon ci-envelope m-2': hover1 == false, 'cap-icon ci-envelope-out m-2': hover1 == true}"></i>
                  <i @mouseover="hover2 = true" @mouseleave="hover2 = false" :class="{'cap-icon ci-mobile m-2': hover2 == false, 'cap-icon ci-phone m-2': hover2 == true}"></i>
                  <i @mouseover="hover3 = true" @mouseleave="hover3 = false" :class="{'cap-icon ci-whatsapp-squared m-2': hover3 == false, 'cap-icon ci-whatsapp-circled m-2': hover3 == true}"></i>
                  <i @mouseover="hover4 = true" @mouseleave="hover4 = false" :class="{'cap-icon ci-facebook-squared m-2': hover4 == false, 'cap-icon ci-facebook-circled m-2': hover4 == true}"></i>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="card">
              <div class="card-body">
                <img src="img/person1.jpg" alt="" class="img-fluid rounded-circle w-50 mb-3">
                <h5>Jelena Pavićević</h5>
                <h5 class="text-muted">Bankar</h5>
                <div class="d-flex justify-content-center">
                  <i @mouseover="hover1 = true" @mouseleave="hover1 = false" :class="{'cap-icon ci-envelope m-2': hover1 == false, 'cap-icon ci-envelope-out m-2': hover1 == true}"></i>
                  <i @mouseover="hover2 = true" @mouseleave="hover2 = false" :class="{'cap-icon ci-mobile m-2': hover2 == false, 'cap-icon ci-phone m-2': hover2 == true}"></i>
                  <i @mouseover="hover3 = true" @mouseleave="hover3 = false" :class="{'cap-icon ci-whatsapp-squared m-2': hover3 == false, 'cap-icon ci-whatsapp-circled m-2': hover3 == true}"></i>
                  <i @mouseover="hover4 = true" @mouseleave="hover4 = false" :class="{'cap-icon ci-facebook-squared m-2': hover4 == false, 'cap-icon ci-facebook-circled m-2': hover4 == true}"></i>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
  </div>
</template>

<script>
export default {
  name: "Managers",
  data() {
    return {
      hover1: false,
      hover2: false,
      hover3: false,
      hover4: false,
    }
  }
}
</script>

<style scoped>
  i {
    font-size: 30px;
    cursor: pointer;
  }
</style>