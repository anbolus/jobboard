<template>
  <div id="cardapp">
    <div class="container">
      <div
        class="card"
        v-for="advertisement in advertisements"
        :key="advertisement.id"
      >
        <div class="card-body">
          <h5 class="card-title">{{ advertisement.chiffre_affaire }}</h5>
          <h6 class="card-subtitle mb-2 text-muted">
            {{ advertisement.lien_entreprise }}
          </h6>
          <p class="card-text" v-if="!readActivated">
            Description du poste <br />
            {{ advertisement.nom_entreprise }}
          </p>
          <p v-if="advertisement.readMore">
            {{ advertisement.secteur_entreprise }}
          </p>
          <p v-if="advertisement.readMore">{{ advertisement.siege_social }}</p>
          <p v-if="advertisement.readMore">
            {{ advertisement.taille_entreprise }}
          </p>

          <button
            class="read btn btn-primary"
            v-if="!readActivated"
            @click="advertisement.readMore = !advertisement.readMore"
          >
            Voir plus
          </button>
          <button @click="apply">Postuler</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";

export default {
  name: "Card",
  data() {
    return {
      readActivated: false,
      advertisements: [],
    };
  },
  methods: {
    activateReadMore() {
      this.readActivated = true;
    },

    apply() {
      let msg = "";
      do {
        msg = prompt("Ecrivez un message au recruteur :");
      } while (msg == "");
      axios
        .post("http://127.0.0.1:8000/api/informations/", {
          id_companies: "1",
          id_users: "1",
          events: msg,
        })
        .then((res) => {
          console.log(res.data);
          this.informations = res.data;
        })
        .catch((error) => {
          console.log(error);
        });
    },
  },
  mounted() {
    axios
      .get("http://127.0.0.1:8000/api/companies/")
      .then((res) => {
        console.log(res.data);
        this.advertisements = res.data;
      })
      .catch((error) => {
        console.log(error);
      });
  },
};
</script>
<style>
.container {
  display: flex;
  flex-direction: column;
  flex-flow: column;
  align-items: center;
  width: 60rem;
  height: 50rem;
}

.card {
  width: 60rem;
  padding: 1vw;
  border: 1px solid black;
}
</style>