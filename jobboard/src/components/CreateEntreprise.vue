<template>
    <div>
        <h2>Ajouter une entreprise</h2>

        <form @submit="addCompany">
            <div>
                <label for="nom_entreprise">Nom de l'entreprise</label>
                <input type="text" v-model="advertisement.nom_entreprise">
            </div>
            <div>
                <label for="siege_social">Siège social</label>
                <input type="text" v-model="advertisement.siege_social">
            </div>

            <div>
                <label for="taille_entreprise">Taille de l'entreprise</label>
                <input type="text" v-model="advertisement.taille_entreprise">
            </div>
            <div>
                <label for="chiffre_affaire">Chiffre d'affaire</label>
                <input type="text" v-model="advertisement.chiffre_affaire">
            </div>
            <div>
                <label for="secteur_entreprise">Secteur</label>
                <input type="text" v-model="advertisement.secteur_entreprise">
            </div>
            <div>
                <label for="lien_entreprise">Lien vers l'entreprise</label>
                <input type="text" v-model="advertisement.lien_entreprise">
            </div>
            <div>
                <button type="submit">Ajouter</button>
            </div>
        </form>
    </div>
</template>
 
<script>
import axios from "axios";
export default {

    data() {
        return {
            advertisement: [],
            form:{
                    nom_entreprise: this.nom_entreprise,
                    siege_social: this.siege_social,
                    taille_entreprise: this.taille_entreprise,
                    chiffre_affaire: this.chiffre_affaire,
                    secteur_entreprise: this.secteur_entreprise,
                    lien_entreprise: this.lien_entreprise,
                }
        }
    },
    methods: {
        addCompany() {
            axios.post("http://127.0.0.1:8000/api/companies/", this.form)
                .then((res) => {
                    console.log(res.data);
                    this.advertisements = res.data;
                })
                .catch((error) => {
                    console.log(error);
                });

        },

    }
}

</script>