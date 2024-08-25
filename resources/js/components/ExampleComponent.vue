<template>
    <!-- <Home /> -->
    <!-- <Header/> -->
    <!-- <About/> -->
<Review/>
</template>

<script>
import About from './About.vue';
import Header from './Header.vue';
import Home from './Home.vue'; // Adjust the path as necessary
import Review from './Review.vue';

export default {
    components: {
        Home,
        Header,
        About,
        Review
    
    },
    mounted() {
        console.log('Component mounted.');
    }
}
</script>
