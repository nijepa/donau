<template>
  <nav class="navbar navbar-expand-md navbar-light fixed-top py-4" id="main-nav">
    <div class="container">
      <a href="#home" class="navbar-brand">
        <img src="img/donau.jpg" width="50" height="50" alt="">
        <h3 class="d-inline align-middle ml-2">Donau</h3>
      </a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto">
          <router-link to="/" activeClass="active" tag="li" class="nav-item nav-link"><a><i class='cap-icon ci-home'></i></a></router-link>
          <router-link to="/about" activeClass="active" tag="li" class="nav-item nav-link"><a>O Nama</a></router-link>
          <li class="nav-item dropdown">
            <router-link to="/representations" activeClass="active" tag="li" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><a>Zastupanja</a></router-link>
          
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
          <li class="nav-item">
            <a href="#authors" class="nav-link">Vesti</a>
          </li>
          <router-link to="/contact" activeClass="active" tag="li" class="nav-item nav-link"><a>Kontakt</a></router-link>
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

<style scoped>
  a {
    text-decoration: none;
  }
</style>