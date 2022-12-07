<template>
  <div>
    <h2>Dernières annonces</h2>
    <Card />
  </div>
</template>

<script>
import Card from "../components/Card.vue";
import { RouterView, RouterLink } from "vue-router";

export default {
  name: "Home",
  components: {
    Card,
  },
};
</script>

<style>
</style>