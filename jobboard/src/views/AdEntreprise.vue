<script setup>
import AdminEntreprise from '../components/AdminEntreprise.vue';
import CreateEntreprise from '../components/CreateEntreprise.vue';
</script>

<template>
    <router-view></router-view>
    <AdminEntreprise />
</template>
<script>
    export default {
        name: "AdminEntreprise",
        components: {
            AdminEntreprise,
            CreateEntreprise,
        }
    }
</script>