<template>
  <div class="h-full">
    <!-- <h1 class="text-5xl font-bold">{{ props.post.post_title }}</h1> -->

    <Slider :slides="slides" />

    <div class="bg-primary p-5">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <img :src="mediaObject.image.url" alt />
        <div class="p-4">
          <h2 class="text-3xl font-bold">{{ mediaObject.title }}</h2>
          <div v-html="mediaObject.description"></div>
        </div>
      </div>
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
  let slider = props.fields.page_sections.filter(
    section => section.acf_fc_layout === "slider"
  );
  if (slider.length) {
    return slider[0].slides;
  }
});

const mediaObject = computed(() => {
  let mediaObject = props.fields.page_sections.filter(
    section => section.acf_fc_layout === "media_object"
  );
  if (mediaObject.length) {
    return mediaObject[0];
  }
});
</script>

<style>
</style>