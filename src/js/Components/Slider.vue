<template>
  <Swiper
    effect="cards"
    :keyboard="{
      enabled: true,
    }"
    :autoplay="{
      delay: 32500,
      disableOnInteraction: false,
    }"
    :loop="true"
    :pagination="{
        clickable: true,
    }"
    :modules="modules"
    @swiper="onSwiper"
  >
    <SwiperSlide v-for="(slide, i) in props.slides" :key="i">
      <div
        class="grid grid-cols-1 md:grid-cols-2 gap-10 place-self-center bg-base-200 p-4 rounded-box shadow-xl m-10"
      >
        <img :src="slide.image.url" :alt="slide.image.alt" />
        <div class="grid h-full place-items-center">
          <div class="top-[20px] grid h-full place-items-center">
            <h1 class="text-3xl font-bold text-center text-secondary">{{ slide.title }}</h1>
            <div v-html="slide.description"></div>

            <a
              href="#"
              class="btn btn-primary bg-transparent text-secondary font-semibold hover:text-white py-2 px-4 border hover:border-transparent rounded transition ease-in-out duration-150"
            >{{ slide.button_text }}</a>
          </div>
        </div>
      </div>
    </SwiperSlide>
  </Swiper>
</template>

<script setup>
import { ref } from "vue";
//Link
import { Link } from "@inertiajs/inertia-vue3";
import { Swiper, SwiperSlide } from "swiper/vue";
import {
  Pagination,
  Navigation,
  EffectCards,
  Keyboard,
  Autoplay
} from "swiper";

import "swiper/css";
import "swiper/css/navigation";

const modules = [Keyboard, Navigation, EffectCards, Pagination, Autoplay];

const swiperInstance = ref();

const onSwiper = swiper => {
  console.log("onSwiper");

  swiperInstance.value = swiper;
};

const goToSlide = position => {
  console.log("goToSlide");
  swiperInstance.value.slideTo(position);
};

const props = defineProps(["slides"]);
</script>

<style scoped>
</style>