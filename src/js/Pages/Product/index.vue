<template>
<div>
    <pre class="text-sm">{{ props.product }}</pre>
    <pre class="text-sm">{{ props.product_details }}</pre>

    <div v-html="props.product_details.description"></div>
    <div v-html="props.product_details.short_description"></div>
</div>
</template>

<script setup>

import { usePage } from "@inertiajs/inertia-vue3"
import { reactive } from "vue"
const { props } = reactive(usePage())

</script>

<style scoped>
</style>