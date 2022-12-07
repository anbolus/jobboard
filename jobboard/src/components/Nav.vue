<template>
  <div class="navbar">
    <ul>
      <li><RouterLink to="/">Home</RouterLink></li>
      <li><RouterLink to="/annonces">Annonces</RouterLink></li>
      <li><RouterLink to="/profile">Profil</RouterLink></li>
      <li><RouterLink to="/login">Log In</RouterLink></li>
      <li><RouterLink to="/signup">Sign Up</RouterLink></li>
    </ul>
  </div>
</template>

<script>
import { RouterView, RouterLink } from "vue-router";

export default {
  name: "Nav",
};
</script>

<style scoped>
.navbar ul {
  list-style: none;
  background-color: #888;
  text-align: center;
  padding: 0;
  margin: 0;
}
.navbar li {
  font-size: 1.2em;
  line-height: 10px;

  border-bottom: 1px solid #888;
}

.navbar a {
  text-decoration: none;
  color: #fff;
  display: block;
  transition: 0.3s;
}

.navbar li {
  display: inline-block;
  margin-right: -4px;
}

a {
  padding: 1rem;
  margin: 1rem;
}
</style>