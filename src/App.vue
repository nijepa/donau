
<template>

		
					<router-view></router-view>
		
	
</template>


<script>
  import Header from './components/Header.vue';
  import Footer from './components/Footer.vue';
  export default {
    components: {

		},
		created() {
			//this.$store.dispatch('initStocks');
		}
  }
</script>

// <!--<style lang="scss">
// #app {
//   font-family: 'Avenir', Helvetica, Arial, sans-serif;
//   -webkit-font-smoothing: antialiased;
//   -moz-osx-font-smoothing: grayscale;
//   text-align: center;
//   color: #2c3e50;
// }
// #nav {
//   padding: 30px;
//   a {
//     font-weight: bold;
//     color: #2c3e50;
//     &.router-link-exact-active {
//       color: #42b983;
//     }
//   }
// }
// </style>-->
<style>
	body {
    height: 100%;
		padding: 30px 0px 30px 0px;
	}
	.slide-enter-active {
		animation: slide-in 500ms ease-out forwards;
	}
	.slide-leave-active {
		animation: slide-out 800ms ease-out forwards;
	}
	@keyframes slide-in {
		from {
			transform: translateY(-30px);
			opacity: 0;
		}
		to {
			transform: translateY(0);
			opacity: 1;
		}
	}

	@keyframes slide-out {
		from {
			transform: translateY(0);
			opacity: 1;
		}
		to {
			transform: translateY(-30px);
			opacity: 0;
		}
	}
</style>