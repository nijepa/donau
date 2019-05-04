<template>
  <div>
    <!-- CONTACT -->
    <section id="contact" class=" ">
      <div data-aos="flip-left">
        <div class="container">
          <div id="con" class="row py-3 bg-light">
            <div class="col-lg-9">
              <h3>Kontaktirajte nas</h3>
              <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, temporibus!</p>
              <form>
                <div class="input-group input-group-lg mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="cap-icon ci-user"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control" placeholder="Ime">
                </div>

                <div class="input-group input-group-lg mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="cap-icon ci-envelope"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control" placeholder="Email">
                </div>

                <div class="input-group input-group-lg mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="cap-icon ci-pencil"></i>
                    </span>
                  </div>
                  <textarea class="form-control" placeholder="Poruka" rows="5"></textarea>
                </div>

                <input type="submit" value="Submit" class="btn btn-primary btn-block btn-lg">
              </form>
            </div>

            <div class="col-lg-3 align-self-center">
              <img src="img/donau.jpg" alt="" class="img-fluid">
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
  </div>
</template>

<script>
export default {
  name: 'Contact',
  props: {
    msg: String
  }
}
</script>

<style scoped>
  #con {
    background-clip: border-box;
    background-size: auto;
    box-shadow: rgb(191, 191, 191) 0px 19px 20px 0px;
  }
  #contact {
    background: transparent;
  }
  #map {
    min-width: 600;
    /*position: relative;*/
    z-index: -1;
    /*margin-top: -100px;*/
  }
</style>
