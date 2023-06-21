<template>
<div>
  <div class="p-4 lg:p-20">
    <div class="flex justify-between">
      <h1>The Shop</h1>
      <Link href="/cart">
        <button class="bg-primary text-white px-4 py-2 rounded">
          Go to Cart
        </button>
      </Link>
    </div>

    <div v-html="page.props.products"></div>
  </div>
</div>
</template>

<script setup>
import { reactive } from "vue"

import { Link, usePage } from "@inertiajs/inertia-vue3"

const page = reactive(usePage())

</script>

<style scoped>
</style>