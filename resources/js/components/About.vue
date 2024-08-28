<template>
  <section id="about-us">

    <div id="carouselExampleAutoplaying" class="carousel slide p-4" data-bs-ride="carousel">
      <div class="carousel-inner rounded-5" style="height: 40vh;">
        <div 
          class="carousel-item" 
          :class="{ active: index === 0 }" 
          v-for="(image, index) in images" 
          :key="index">
          <img :src="image.src" :alt="image.alt" class="d-block w-100 img-fluid " style="border:2px solid #db7fdf">
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

    <div class="container ">
      <div class="row">

        <div class="col-lg-6">
          <img src="https://media.istockphoto.com/id/1300513392/vector/happy-man-in-apron-mixing-ingredients-in-bowl.jpg?s=612x612&w=0&k=20&c=y2eEO4h2htJ1W1h0HwWzB54yXcbxiyHojngMwPZDhtE=" alt="Dessert image" class="img-fluid rounded-5" style="border:2px solid #db7fdf;height: 100%;">
        </div>

        <div class="col-lg-6 ">
          <h1 class="display-4" style="color:#cca5ce">What We Do</h1>
          <p class="lead">
            We strive to make your cooking experience enjoyable and fulfilling. Our website features:
          </p>
          <ul>
            <li><strong style="color:#db7fdf">Hundreds of Recipes:</strong> From quick weeknight dinners to elaborate weekend feasts, find recipes for every occasion.</li>
            <li><strong style="color:#db7fdf">Step-by-Step Guides:</strong> Detailed instructions and helpful tips to ensure your cooking is always a success.</li>
            <li><strong style="color:#db7fdf">Inspiring Food Stories:</strong> Discover the stories behind our recipes and the culinary traditions they represent.</li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container mb-5 mt-5">
      <h2 class="text-center fw-bold" style="font-family:Baskervville SC;color:#db7fdf;">
        “Sharing food with another human being is an intimate act that should not be indulged in lightly. When we cook for others, we offer not only our food but also our time, our care, and our love.”
      </h2>
    </div>
  </section>
</template>

<script>
export default {
  data() {
    return {
      images: [
        { src: "https://images.pexels.com/photos/17321470/pexels-photo-17321470/free-photo-of-a-plate-with-a-sandwich-on-it-and-a-salad.jpeg?auto=compress&cs=tinysrgb&w=600", alt: "A plate with a sandwich and salad" },
        { src: "https://img.freepik.com/free-photo/delicious-lobster-gourmet-seafood_23-2151713033.jpg?t=st=1724686598~exp=1724690198~hmac=902bec35bc469d570d36aa2ada0e9ffeb2beda0c00b0242bd878258a0ff23298&w=740", alt: "Traditional pakora with mint and green sauces" },
        { src: "https://images.pexels.com/photos/6287525/pexels-photo-6287525.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1", alt: "A delicious plate of food" }
      ]
    };
  }
}
</script>

<style>

.carousel-inner img {
  object-fit: cover; 
}

</style>