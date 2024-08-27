<template>
  <section id="homes">
    <!-- Search Section -->
    <div id="home" class="container my-5">
     
        <form @submit.prevent="search" class="d-flex">
  <input
    v-model="query"
    placeholder="Enter Recipe Name"
    required
    type="text"
    value=""
    class="form-control me-2"
  />
  <button
    type="submit" 
    class="btn text-white"
    id="button-addon2"
    style="background-color:#b531bb"
    :disabled="loading"
  >
    {{ loading ? 'Loading...' : 'Get Started!!' }}
  </button>
</form>
      </div>

    <!-- Inspirational Text -->
    <div class="container my-5">
      <h3 class="text-center" style="color: #b531bb; font-family: Pacifico, cursive;">
        Food is the language of love, a universal expression of care and connection.
        Each meal shared is a journey through flavors, bringing hearts closer together.
        In every bite, we taste the essence of life.
      </h3>
    </div>

    <!-- Loading Spinner -->
    <div v-if="loading" class="text-center my-5">
      <div class="spinner-border text-primary" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    </div>

    <!-- Error Message -->
    <div v-if="error" class="error text-center my-5">{{ error }}</div>

    <!-- Recipe Cards -->
    <div v-if="data" class="container my-4">
      <div class="row justify-content-center">
        <div
          class="card col-lg-3 col-md-4 mx-3 mb-4"
          v-for="item in data.hits"
          :key="item.recipe.uri"
          style="width: 18rem;"
        >
          <img :src="item.recipe.image" class="card-img-top" alt="Recipe image">
          <div class="card-body text-center">
            <h5 class="card-title">{{ item.recipe.label }}</h5>
            <h6 class="card-text">
              <i class="bi bi-arrow-left-short"></i>{{ item.recipe.cuisineType }}
              <i class="bi bi-arrow-right-short"></i>
            </h6>
            <ul class="list-unstyled">
              <h3 style="color:#b531bb">INGREDIENT'S: </h3>
              <li
                v-for="ingredient in item.recipe.ingredientLines"
                :key="ingredient"
                class="d-flex align-items-center mb-2"
              >
                <i class="bi bi-balloon-heart-fill me-2" style="color:#b531bb"></i>{{ ingredient }}
              </li>
            </ul>
            <a
              :href="item.recipe.url"
              target="_blank"
              class="btn"
              style="background-color:#b531bb;color:white"
            >
              Recipe
            </a>
          </div>
        </div>
        
      </div>
    </div>
    <div v-else class="text-center display-5 fw-bold" style="color:#b531bb">
  Search it !!!
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
/* Error and Loading Styles */
.error {
  color: red;
}

.spinner-border {
  width: 3rem;
  height: 3rem;
}

/* Home Section Styles */
#home {
  background: url("https://recipesblob.oetker.in/assets/9447029b80054ee49f3ac21841884874/1272x764/dabeli.webp") no-repeat center center;
  background-size: cover;
  padding: 80px;
  border: 2px solid #b531bb;
  border-radius: 20px;
}

/* Card Styles */
.card {
  border-radius: 20px;
  padding: 5px;
  box-shadow: rgba(151, 65, 252, 0.2) 0 15px 30px -5px;
  background-image: linear-gradient(144deg, #AF40FF, #5B42F3 50%, #00DDEB);
}

.card-img-top {
  height: 200px;
  object-fit: cover;
}

.card-body {
  background: rgb(5, 6, 45);
  color: white;
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
