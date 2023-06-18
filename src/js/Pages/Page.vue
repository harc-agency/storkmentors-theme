<template>

<section class="p-5 bg-slate-100 sm:bg-slate-200 md:bg-slate-400 lg:bg-slate-600 lg:text-white ">
            <h1>Page:</h1>
            <h3>{{ props.page.post_title }}</h3>
            <div v-html="props.page.post_content"></div>
        </section>

</template>

<script setup>
import { usePage } from "@inertiajs/inertia-vue3"

const { props } = usePage()
 
</script>

<style scoped ></style>
