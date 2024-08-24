<template>
    <Home />
    <Header/>
    <!-- <Api/> -->

</template>

<script>
import Api from './Api.vue';
import Header from './Header.vue';
import Home from './Home.vue'; // Adjust the path as necessary

export default {
    components: {
        Home,
        Header,
        Api
    
    },
    mounted() {
        console.log('Component mounted.');
    }
}
</script>
