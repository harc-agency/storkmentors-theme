<template>
<div>
  <div class="p-20">
    <div v-html="props.product"></div>
  </div>
</div>
</template>

<script setup>

import { usePage } from "@inertiajs/inertia-vue3"
import { reactive, onMounted } from "vue"
const { props } = reactive(usePage())

</script>

<style lang="scss">
.woocommerce{

}
</style>