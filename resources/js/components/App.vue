<template>
    <div id="app">
      <Home />
      <router-view /> <!-- This is where the routed components will appear -->
      <Footer />
    </div>
  </template>
  
  <script>
  import Home from './Home.vue'
  import Footer from './Footer.vue';
  
  export default {
    components: {
      Home,
      Footer
    }
  }
  </script>
  