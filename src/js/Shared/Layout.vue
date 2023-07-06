<template>
<Header />
<main>
  <slot></slot>
</main>
<Footer />
</template>

<script setup>
import Header from "./Header.vue"
import Footer from "./Footer"
</script>

<style></style>
