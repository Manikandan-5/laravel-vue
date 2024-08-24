<template>
    <section id="homes">
      <div id="home">
        <div class="input-group mb-3">
          <input v-model="query" placeholder="Enter Recipe Name" aria-label="Search term" aria-describedby="button-addon2" type="text" class="form-control"/>
          <button @click="search" class="btn btn-warning" type="button" id="button-addon2">Get Started!!</button>
        </div>
      </div>
  
      <div v-if="loading" class="loading">Loading...</div>
      <div v-if="error" class="error">{{ error }}</div>
  
      <div v-if="data">
        <div class="row justify-content-center mt-4">
          <div class="card col-lg-3 col-md-4 mx-3 mx-md-3 mb-4" v-for="item in data.hits" :key="item.recipe.uri" style="width: 18rem;">
            <img :src="item.recipe.image" class="card-img-top" alt="Recipe image">
            <div class="card-body text-center">
              <h5 class="card-title">{{ item.recipe.label }}</h5>
              <h6 class="card-text">
                <i class="bi bi-arrow-left-short"></i>{{ item.recipe.cuisineType }}
                <i class="bi bi-arrow-right-short"></i>
              </h6>
              <ul class="list-unstyled">
                <h3 class="text-warning">INGREDIENT'S: </h3>
                <li v-for="ingredient in item.recipe.ingredientLines" :key="ingredient" class="d-flex align-items-center mb-2">
                  <i class="bi bi-balloon-heart-fill text-warning  me-2"></i>{{ ingredient }}
                </li>
              </ul>
              <a :href="item.recipe.url" target="_blank" class="btn btn-warning">Recipe</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </template>
  
  <script>
  import axios from 'axios';
  
  export default {
    data() {
      return {
        data: null,
        loading: false,
        error: null,
        query: '',
      };
    },
    methods: {
      async fetchData(query) {
        const APP_ID = '3f94c30f';
        const APP_KEY = '36956c287e5b701f5541f5ce0c00b253';
        this.loading = true;
        this.error = null;
  
        try {
          const response = await axios.get(`https://api.edamam.com/search?q=${query}&app_id=${APP_ID}&app_key=${APP_KEY}`);
          this.data = response.data;
        } catch (error) {
          this.error = error.response ? error.response.data.message : error.message;
        } finally {
          this.loading = false;
        }
      },
      search() {
        if (this.query.trim()) {
          this.fetchData(this.query);
        }
      },
    },
  };
  </script>
  <style scoped>
  .error {
    color: red;
  }
  
  .loading {
    font-size: 1.5rem;
    font-weight: bold;
  }
  
  #home {
    background: url("https://recipesblob.oetker.in/assets/9447029b80054ee49f3ac21841884874/1272x764/dabeli.webp") no-repeat center ;
    background-size: cover;
     padding: 120px
  }
  
  .input-group {
    margin: 20px 0;
  }
  
  .card {
    margin-bottom: 20px;
  }
  
  .card-img-top {
    height: 200px;
    object-fit: cover;
  }
  
  .card-body {
    padding: 15px;
  }
  
  .card-title {
    font-size: 1.25rem;
    font-weight: bold;
  }
  
  .card-text {
    font-size: 1rem;
  }
  
  .list-unstyled li {
    display: flex;
    align-items: center;
  }
  
  .me-2 {
    margin-right: 0.5rem;
  }
  </style>
  