<template>
  <nav class="navbar navbar-expand-md navbar-light fixed-top py-4" id="main-nav">
    <div class="container">
      <a href="#home" class="navbar-brand">
        <img src="img/donau.jpg" width="50" height="50" alt="">
        <h3 class="d-inline align-middle ml-2">DONAU TRADE</h3>
      </a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="#home" v-smooth-scroll class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="#about" v-smooth-scroll class="nav-link">O nama</a>
          </li>
          <li class="nav-item dropdown">
            <router-link to="/representations" tag="li" class="nav-item nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><a>Zastupanja</a></router-link>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
          <li class="nav-item">
            <a href="#authors" v-smooth-scroll class="nav-link">Vesti</a>
          </li>
          <li class="nav-item">
            <a href="#contact" v-smooth-scroll class="nav-link">Kontakt</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</template>

<script>
  export default {
    name: "Header"
  }
</script>