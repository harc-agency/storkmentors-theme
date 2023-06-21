<template>
<section>
  <div class="p-20">
    <h1 class="text-4xl font-bold text-center">
      {{ props.content }}
    </h1>

    <div class="text-center">
      <a href="/">
        <button class="bg-primary text-white px-4 py-2 rounded">
          Go Home
        </button>
      </a>
    </div>
  </div>
</section>
</template>

<script setup>
import { usePage } from "@inertiajs/inertia-vue3"

const { props } = usePage()
</script>

<style></style>
