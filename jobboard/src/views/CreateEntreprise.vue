<template>
 <router-view></router-view>
    <CreateEntreprise />
</template>
 
<script>
import CreateEntreprise from '../components/CreateEntreprise.vue';
    export default {
    data() {
        return {
            advertisement: [],
            company: {}
        };
    },
    components: { CreateEntreprise }
}
</script>