<template>
  <section id="about-us">
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div 
          class="carousel-item" 
          :class="{ active: index === 0 }" 
          v-for="(image, index) in images" 
          :key="index">
          <img :src="image.src" :alt="image.alt" class="d-block w-100">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <div class="row">
      <div class="col-lg-6 p-5 text-center" style="border:2px solid red">
        <img src="https://images.pexels.com/photos/17379717/pexels-photo-17379717/free-photo-of-lilac-colored-petit-four-cake-with-yellow-cherry-and-a-glass-of-fruit-milkshake.jpeg?auto=compress&cs=tinysrgb&w=600
        " alt="image" style="height:80%;width:auto">
        
      </div>
      <div class="col-lg-6 p-4"
      style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif"
      >
        <h4  class="p-5">
           <h1 class=" display-4" style="color:#cca5ce">What We Do</h1>
          We strive to make your cooking experience enjoyable and fulfilling.
        
  We strive to make your cooking experience enjoyable and fulfilling. Our website features:
        </h4>
 <h3><span  style="color:#cca5ce">An Hundreds of Recipes:</span> From quick weeknight dinners to elaborate weekend feasts, find recipes for every occasion.</h3> 
<h3><span  style="color:#cca5ce"> Step-by-Step Guides: </span>Detailed instructions and helpful tips to ensure your cooking is always a success.</h3> 
 <h3><span  style="color:#cca5ce">Inspiring Food Stories:</span>  Discover the stories behind our recipes and the culinary traditions they represent.</h3>      </div>
    </div>
    <div class="container">
      <h1 style="font-family:Matemasie, sans-seri;color:#cca5ce" class="m-5" >“Sharing food with another human being is an intimate act that should not be indulged in lightly. When we cook for others, we offer not only our food but also our time, our care, and our love.”</h1>
    </div>
  </section>
</template>

<script>
export default {
  data() {
  return {
    images: [
      { src: "https://images.pexels.com/photos/17321470/pexels-photo-17321470/free-photo-of-a-plate-with-a-sandwich-on-it-and-a-salad.jpeg?auto=compress&cs=tinysrgb&w=600", alt: "A plate with a sandwich and salad" },
      { src: "https://images.pexels.com/photos/23266988/pexels-photo-23266988/free-photo-of-traditional-desi-pakora-with-mint-and-green-sauces-popular-pakistani-snack.jpeg?auto=compress&cs=tinysrgb&w=600", alt: "Traditional pakora with mint and green sauces" },
      { src: "https://images.pexels.com/photos/6287525/pexels-photo-6287525.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1", alt: "A delicious plate of food" }
    ]
  };
}

}
</script>

