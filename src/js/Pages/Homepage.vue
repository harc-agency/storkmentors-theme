<template>
  <div class="h-full">
    <!-- <h1 class="text-5xl font-bold">{{ props.post.post_title }}</h1> -->

    <Slider :slides="slides" />

    <div class="MediaObjects">
      <h1>{{mediaObject}}</h1>
    </div>
  </div>
</template>

<script setup>
import Slider from "@/Components/Slider.vue";
import { Link, usePage } from "@inertiajs/inertia-vue3";
import { reactive, computed } from "vue";

const { props } = reactive(usePage());
// props.site
// props.post
// props.fields

const slides = computed(() => {
  let fields = props.fields.page_sections.filter(
    section => section.acf_fc_layout === "slider"
  );
  if (fields.length) {
    return fields[0].slides;
  }
});

// const mediaObject = computed(() => {
//   console.log("mediaObject computed");

//   let fields = props.fields.page_sections.filter(
//     section => section.acf_fc_layout === "media_object"
//   );
//   if (fields.length) {
//     return fields[0].media_object;
//   }
// });
</script>

<style>
</style>