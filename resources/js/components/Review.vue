<template>
  <div>
    <form class="d-flex" @submit.prevent="save">
      <div class="input-group">
        <input
          type="text"
          placeholder="Enter Name"
          required
          class="form-control me-2"
          v-model="comment.fullname"
        />
        <input
          type="text"
          placeholder="Enter Comment"
          required
          class="form-control me-2"
          v-model="comment.comment"
        />
        <button
          type="submit"
          class="btn text-white"
          id="button-addon2"
          style="background-color: #b531bb"
        >
          Comment
        </button>
      </div>
    </form>
    <div class="container mt-4">
      <div class="row">
        <div
          v-for="task in result"
          :key="task.id"
          class="col-lg-3 col-md-4 mb-4"
        >
          <div class="cardd p-3 d-block">
            <p style="color:#b531bb">Name : {{ task.fullname }}</p>
            <p>{{ task.comment }}</p>
            <p style="color:#b531bb">Thank You <i class="bi bi-chat-heart-fill text-danger h4"></i></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  name: "Review",
  data() {
    return {
      result: [], // Initialize as an empty array
      comment: {
        id: "",
        fullname: "",
        comment: ""
      }
    };
  },
  created() {
    this.fetchComments();
  },
  methods: {
    fetchComments() {
      axios.get('http://127.0.0.1:8000/api/comments')
        .then(({ data }) => {
          this.result = data;
        })
        .catch(error => {
          console.error("There was an error!", error);
        });
    },
    save() {
      this.saveData();
    },
    saveData() {
      axios.post('http://127.0.0.1:8000/api/save', this.comment, {
        headers: {
          'Content-Type': 'application/json'
        }
      })
      .then(({ data }) => {
        alert("Thank You For Feedback!!")
        this.fetchComments(); 
        this.resetComment();
      })
      .catch(error => {
        console.error("There was an error!", error);
      });
    },
    resetComment() {
      this.comment = {
        id: "",
        fullname: "",
        comment: ""
      };
    }
  }
};
</script>

<style scoped>
/* From Uiverse.io by SteveBloX */ 
.cardd {
  box-sizing: border-box;
  width: 190px;
  height:auto;
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
