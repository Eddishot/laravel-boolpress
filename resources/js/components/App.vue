
<template>
<div>
  <h1>{{message}}</h1>
  <a href="/login">login</a>
  <a href="/register">register</a>
  
   <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
          <div v-for="post in postsList" :key="post.id" class="card mt-4 mb-5">
            <h2>{{ post.title }}</h2>
            <p>{{ post.content }}</p>
          </div>
        </div>
      </div>
    </div>
</div>
  
  
</template>

<script>
import axios from "axios";
export default {
    name: "App", 
    // components: {Post},
    data(){
        return{
            message: "Welcome to the Main Page",
            postsList:[],
        };
    },
    mounted(){
       axios.get("/api/posts").then((resp) => {
      this.postsList = resp.data;
       });
    },
};
</script>

<style>

</style>