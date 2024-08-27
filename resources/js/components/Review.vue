<template>
    <h1>Revie</h1>
    <div class="input-group mb-3">
        <input v-model="query" placeholder="Enter Comment!!" aria-label="Search term" aria-describedby="button-addon2" type="text" class="form-control"/>
        <button @click="search" class="btn btn-warning text-white" type="button" id="button-addon2" style="background-color:#b531bb">Get Started!!</button>
      </div>

      <div>
<div class="cardd">
  Click me
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


