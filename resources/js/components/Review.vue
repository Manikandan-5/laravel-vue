<template>
  <div>
    <h1>Review</h1>
    <form class="d-flex" @submit.prevent="save">
  <div class="input-group">
    <input
      type="text"
      placeholder="Enter  Name"
      required
      class="form-control me-2"
      v-model="comments.fullname"
    />
    <input
      type="text"
      placeholder="Enter Comment"
      required
      class="form-control me-2"
       v-model="comments.comment"
    />
    <button
      type="submit"
      class="btn text-white"
      id="button-addon2"
      style="background-color: #b531bb"
    >Comment
    </button>
  </div>
</form>

    <div class="d-flex">
    <ul  v-for="task in result" :key="task.id" >
    <li class="cardd d-block mt-3">

        <p>{{ task.fullname }}</p>
        <p>{{ task.comment }}</p>
      </li>

    </ul></div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  name: "Review",
  data() {
    return {
      result: [], // Initialize as an empty array
      comment:{
        id:"",
        fullname:"",
        comment:""
      }
    };
  },
  created() {
    this.comments();
  },
  methods: {
    comments() {
      const page = "http://127.0.0.1:8000/api/comments";
      axios.get(page)
        .then(({ data }) => {
          console.log(data);
          this.result = data;
        })
        .catch(error => {
          console.error("There was an error!", error);
        })
        .finally(() => {
          this.loading = false; // End loading
        });
    },
    save(){
      this.saveData();
    },
    saveData(){
      axios.post('http://127.0.0.1:8000/api/save',this.comment)
      .then(({data})=>{
        alert("Sace")
      })
    }
  }
};
</script>

<style scoped>
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
