<template>
    <Home />
    <Header/>
    <About/>
    <Review/>
    <Footer/>
</template>

<script>
import About from './About.vue';
import Header from './Header.vue';
import Home from './Home.vue'; // Adjust the path as necessary
import Review from './Review.vue';
import Footer from './Footer.vue';

export default {
    components: {
        Home,
        Header,
        About,
        Review,
        Footer
    
    },
    mounted() {
        console.log('Component mounted.');
    }
}
</script>
