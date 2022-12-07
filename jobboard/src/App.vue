<script setup>
import Nav from "./components/Nav.vue";
import { RouterView, RouterLink } from "vue-router";
</script>

<template>
  <div>
    <Nav />
    <RouterView />
  </div>
</template>

<script>
export default {
  name: "App",
  mounted() {
    console.log("mounted");
  },
};
</script>

<style>
</style>