<template>
  <h1>Revie</h1>
  <form @submit.prevent="search" class="d-flex">
<input
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
<div class="cardd">
<div>
  <p>{{ name }}</p>
  <p>{{ comment }}</p>
</div>
</div>


</template>

<script>

</script>

<style setup>
/* From Uiverse.io by SteveBloX */ 
.cardd {
  box-sizing: border-box;
  width: 190px;
  height: 254px;
  background: rgba(217, 217, 217, 0.58);
  border: 1px solid white;
  box-shadow: 12px 17px 51px rgba(0, 0, 0, 0.22);
  backdrop-filter: blur(6px);
  border-radius: 17px;
  text-align: center;
  cursor: pointer;
  transition: all 0.5s;
  display: flex;
  align-items: center;
  justify-content: center;
  user-select: none;
  font-weight: bolder;
  color: black;
}

.cardd:hover {
  border: 3px solid #b531bb;
  transform: scale(1.05);
}

.cardd:active {
  transform: scale(0.95) rotateZ(1.7deg);
}
</style>


