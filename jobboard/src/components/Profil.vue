<template>
  <h2>Inscrivez-vous</h2>
  <form name="formulaire1" action="page-envoi.html" method="get">
    <p>
      <input type="radio" name="civi" value="Mme" /> Madame
      <input type="radio" name="civi" value="Mlle" /> Mademoiselle
      <input type="radio" name="civi" value="Mr" /> Monsieur
    </p>
    <p>
      NOM :<br />
      <input type="text" name="prenom" value="" />
    </p>
    <p>
      Prénom :<br />
      <input type="text" name="nom" value="" />
    </p>
    <p>
      Email :<br />
      <input type="text" name="email" value="" />
    </p>
    <p>
      Mot de passe<br />
      <input type="password" name="passe" value="" />
    </p>
    <p>
      Confirmez le mot de passe <br />
      <input type="password" name="passe" value="" />
    </p>
    <p>
      Vous êtes<br />
      <select name="profil">
        <option value="parti">En recherche d'emploi</option>
        <option value="profe" selected="selected">Une entreprise</option>
        <option value="autre">Autre</option>
      </select>
    </p>
    <p>
      Quel type de contrat recherchez-vous?<br />
      <input type="checkbox" name="interet" value="CDI" /> CDI
      <input type="checkbox" name="interet" value="CDD" /> CDD
      <input type="checkbox" name="interet" value="Stage" /> Stage
      <input type="checkbox" name="interet" value="Alternance" /> Alternance
    </p>
    <p>
      Votre message :<br />
      <textarea name="le-message" rows="6" cols="40"></textarea>
    </p>
    <p>
      <input type="submit" value="Envoyer" />
      <input type="reset" value="Annuler" />
    </p>
  </form>
</template>


<script setup>
import { RouterView, RouterLink } from "vue-router";


</script>