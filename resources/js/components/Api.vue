<template>
  <div>
    <h1>Edamon Data</h1>
    <input v-model="query" placeholder="Enter search term" />
    <button @click="search">Search</button>

    <div v-if="loading">Loading...</div>
    <div v-if="error" class="error">Error: {{ error }}</div>

    <div v-if="data">
      <!-- List Format -->
      <ul>
        <li v-for="item in data.hits" :key="item.recipe.uri">
          {{ item.recipe.label }} - {{ item.recipe.description }}
        </li>
      </ul>

      <!-- Card Format -->
      <div class="row justify-content-center">
      <div class="card col-lg-3 col-md-4 mx-3 mx-md-3" v-for="item in data.hits" :key="item.recipe.uri" style="width: 18rem;">
        <img :src="item.recipe.image" class="card-img-top" alt="Recipe image">
        <div class="card-body text-center">
          <h5 class="card-title">{{ item.recipe.label}}</h5>
          <h5 class="card-text"><i class="bi bi-arrow-left-short"></i>{{ item.recipe.cuisineType}}
          <i class="bi bi-arrow-right-short"></i>
        </h5>
        <ul>
  <li v-for="ingredient in item.recipe.ingredientLines" :key="ingredient" style="list-style-type:none"><i class="bi bi-balloon-heart-fill" style="float:left"></i>{{ ingredient }}</li>
</ul>


<a :href="item.recipe.url" target="_blank" class="btn btn-primary">Recipe</a>


        </div>
      </div>
    </div>
  </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      data: null,
      loading: false,
      error: null,
      query: '', // Add a query data property
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
        // Improved error handling
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
</style>
