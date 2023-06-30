<template>
<section class="mt-20">
  <!-- Who We Are -->
  <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-1 place-items-center">
    <div class="flex flex-col md:w-1/2  md:p-5 align-middle">
      <h1 class="text-4xl text-center font-bold mb-5">
        Who We Are
      </h1>
      <Link
        as="a"
        class="btn bg-ternary font-bold">
        Meet Out Mentors
      </Link>
    </div>

    <div class="  text-white">
      <div class="grid grid-cols-1 md:grid-cols-2   gap-4 md:gap-1">
        <!-- Leslie Judd -->
        <div class="flex flex-col items-center justify-center bg-primary p-5">
          <img :src="path('images/leslie-judd.webp')"
               class="rounded-full w-[100px] h-[100px] object-cover object-top" alt="">
          <div class="flex flex-col items-center justify-center">
            <h1 class="text-2xl font-bold mb-5">
              Leslie Judd
            </h1>
            <p class="text-center text-xl">
              CEO <small>(pretty long List)</small>
            </p>
          </div>
        </div>

        <!-- Brent Bland -->
        <div class="flex flex-col items-center justify-center bg-primary p-5">
          <img :src="path('images/brent-bland.webp')"
               class="rounded-full w-[100px] h-[100px] object-cover object-top" alt="">
          <div class="flex flex-col items-center justify-center">
            <h1 class="text-2xl font-bold mb-5">
              Brent Bland
            </h1>
            <p class="text-center text-xl">
              Operations Manager
            </p>
          </div>
        </div>

        <!-- Tanner Holm -->
        <div class="flex flex-col items-center justify-center bg-primary p-5">
          <img :src="path('images/tanner-holm.webp')"
               class="rounded-full w-[100px] h-[100px] object-cover object-top" alt="">
          <div class="flex flex-col items-center justify-center">
            <h1 class="text-2xl font-bold mb-5">
              Tanner Holm
            </h1>
            <p class="text-center text-xl">
              Mentor / Developer
            </p>
          </div>
        </div>

        <!-- Dustin Woodard -->
        <div class="flex flex-col items-center justify-center bg-primary p-5">
          <img :src="path('images/dustin-woodard.webp')"
               class="rounded-full w-[100px] h-[100px] object-cover object-top" alt="">
          <div class="flex flex-col items-center justify-center">
            <h1 class="text-2xl font-bold mb-5">
              Dustin Woodard
            </h1>
            <p class="text-center text-xl">
              Mentor / Developer
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</template>

<script setup>

//inertia 
import { path } from "@/helper/theme"
import { Link } from "@inertiajs/inertia-vue3"
</script>

<style scoped>
</style>