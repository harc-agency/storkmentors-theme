<template>
<div>
  <div class="p-20">
    <div v-html="props.product"></div>
  </div>
</div>
</template>

<script setup>

import { usePage } from "@inertiajs/inertia-vue3"
import { reactive } from "vue"
const { props } = reactive(usePage())

</script>

<style scoped>
</style>