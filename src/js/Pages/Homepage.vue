<template>
  <div>
    <div class="bg-secondary md:flex justify-between items-center p-5">
      <div class="lg:flex lg:justify-around align-middle">
        <h1 class="text-primary text-5xl lg:ml-2">StorkMentors</h1>
        <h2 class="text-white text-2xl self-end">A New Lease on Life</h2>
      </div>
      <div class="flex justify-between w-4/12 md:w-2/12 text-primary">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke-width="1.5"
          stroke="currentColor"
          class="w-6 h-6"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"
          />
        </svg>

        <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke-width="1.5"
          stroke="currentColor"
          class="w-6 h-6"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            pathLength="1"
            d="M15.182 15.182a4.5 4.5 0 01-6.364 0M21 12a9 9 0 11-18 0 9 9 0 0118 0zM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75zm-.375 0h.008v.015h-.008V9.75zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75zm-.375 0h.008v.015h-.008V9.75z"
          />
        </svg>

        <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke-width="1.5"
          stroke="currentColor"
          class="w-6 h-6"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"
          />
        </svg>
      </div>
    </div>

    <Slider :slides="slides" />

    <!-- When Change is imminent -->
    <div class="bg-[#ff9040] p-5">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <img :src="mediaObject.image.url" alt />
        <div class="p-4">
          <h2 class="text-3xl font-bold">{{ mediaObject.title }}</h2>
          <div v-html="mediaObject.description"></div>
        </div>
      </div>
    </div>

    <!-- Where are you going? -->

    <div>
      <h1 class="text-center">
        Where are
        <span class="underline text-orange-500">you</span>
        going?
      </h1>

      <div class="grid grid-cols-4 gap-4">
        <div
          class="card w-96 bg-base-100 shadow-xl image-full"
          v-for="(link, index) in linksItems"
          :key="index"
        >
          <img :src="link.image" class="filter grayscale" />

          <div class="card-body">
            <div class="rounded bg-[#0e84b722]">
              <span>
                <Link :href="link.url" class="btn btn-primary">
                  <span class="card-title text-white">{{ link.title }}</span>
                </Link>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import Slider from "@/Components/Slider.vue";
import { Link, usePage } from "@inertiajs/inertia-vue3";
import { ref, reactive, computed, onMounted } from "vue";
import { gsap } from "gsap";

const { props } = reactive(usePage());
// props.site
// props.post
// props.fields

const linksItems = ref([
  {
    url: "#",
    title: "Podcasts",
    image: "https://picsum.photos/200/200"
  },
  {
    url: "#",
    title: "WebDev School",
    image: "https://picsum.photos/200/200"
  },
  {
    url: "#",
    title: "Live Online Classes",
    image: "https://picsum.photos/200/200"
  },
  {
    url: "#",
    title: "Bi-Annual Summit",
    image: "https://picsum.photos/200/200"
  },

  {
    url: "#",
    title: "Our Library",
    image: "https://picsum.photos/200/200"
  },
  {
    url: "#",
    title: "Downloads",
    image: "https://picsum.photos/200/200"
  },
  {
    url: "#",
    title: "Our Community",
    image: "https://picsum.photos/200/200"
  },
  {
    url: "#",
    title: "1-1 Mentors",
    image: "https://picsum.photos/200/200"
  }
]);

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

  /*
  Podcasts
            WebDev School
            Live Online Classes
            Bi-Annual Summit
            Blog
            Our Library
            Downloads
            Our Community
            1-1 Mentors
*/
  //make an array of objects out of this called const links as a placeholder for now
});

onMounted(() => {});
</script>

<style>
</style>