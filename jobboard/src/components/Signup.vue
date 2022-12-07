<script setup>
import { RouterView, RouterLink } from "vue-router";
</script>

<template>
  <div id="signup" class="container">
    <form name="mon-formulaire1" action="page-envoi.html" method="get">
      <p>
        <input type="radio" name="civi" value="Mme" /> Madame
        <input type="radio" name="civi" value="Mlle" /> Mademoiselle
        <input type="radio" name="civi" value="Mr" /> Monsieur
      </p>
      <p>
        Votre prénom :<br />
        <input type="text" name="prenom" value="" />
      </p>
      <p>
        Votre nom :<br />
        <input type="text" name="nom" value="" />
      </p>
      <p>
        Votre mot de passe :<br />
        <input type="password" name="passe" value="" />
      </p>
      <p>
        Vous êtes<br />
        <select name="profil">
          <option value="parti">Un particulier</option>
          <option value="profe" selected="selected">Un professionnel</option>
          <option value="insti">Un institutionnel</option>
        </select>
      </p>
      <p>
        Quel type de prestation recherchez vous ?<br />
        <input type="checkbox" name="interet" value="loc" /> Location de
        mobilier <input type="checkbox" name="interet" value="achat" /> Achat de
        mobilier
      </p>
      <p>
        Votre message :<br />
        <textarea name="le-message" rows="6" cols="40">
Vous pouvez saisir ici un message.</textarea
        >
      </p>
      <p>
        <input type="submit" value="Envoyer" />
        <input type="reset" value="Annuler" />
      </p>
    </form>
  </div>
</template>

