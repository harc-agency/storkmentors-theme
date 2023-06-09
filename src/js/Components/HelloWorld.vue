<script setup>
import { usePage } from "@inertiajs/inertia-vue3";

const { props } = usePage();
</script>
<template>
  <div>
    <h1>Hello World</h1>
    <p>{{ props.site.name }}</p>
  </div>
</template>



<style>
</style>