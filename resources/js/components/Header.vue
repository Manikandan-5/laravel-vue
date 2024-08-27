<template>
    <section id="homes">
      <div id="home">
        <div class="input-group mb-3">
          <input v-model="query" placeholder="Enter Recipe Name" aria-label="Search term" aria-describedby="button-addon2" type="text" class="form-control"/>
          
        <button @click="search" class="btn  text-white" type="button" id="button-addon2" style="background-color:#b531bb">Get Started!!</button>
      </div>  
      </div>
  
      <div v-if="loading" class="loading " style="color:#b531bb">Loading...</div>
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
                <h3  style="color:#b531bb">INGREDIENT'S: </h3>
                <li v-for="ingredient in item.recipe.ingredientLines" :key="ingredient" class="d-flex align-items-center mb-2">
                  <i class="bi bi-balloon-heart-fill   me-2" style="color:#b531bb"></i>{{ ingredient }}
                </li>
              </ul>
              <a :href="item.recipe.url" target="_blank" class="btn" style="background-color:#b531bb;color:white">Recipe</a>
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
    color:#b531bb
  }
  
  #home {
    background: url("https://recipesblob.oetker.in/assets/9447029b80054ee49f3ac21841884874/1272x764/dabeli.webp") no-repeat center ;
    background-size: cover;
     padding: 120px;
     border:2px solid #b531bb;
     border-radius: 20px;
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
  .card {
    border-radius: 20px;
    padding: 5px;
    box-shadow: rgba(151, 65, 252, 0.2) 0 15px 30px -5px;
    background-image: linear-gradient(144deg,#AF40FF, #5B42F3 50%,#00DDEB);
  }
  
.card-body {
  background: rgb(5, 6, 45);
  width: 100%;
  height: 100%;
  color:white
}
  </style>
  