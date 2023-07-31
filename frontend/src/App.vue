<script setup>
import { RouterLink, RouterView } from 'vue-router'
import NavBar from './components/NavBar.vue';
import FootBar from './components/FootBar.vue';
</script>

<template>
    <div class="flex flex-col min-h-screen">
  <header>
    <NavBar />
  </header>

  <RouterView />
  <footer>
    <FootBar />
  </footer>
</div>
</template>

<style scoped>

</style>
