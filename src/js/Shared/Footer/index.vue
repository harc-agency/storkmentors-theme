<template>
<section
  class="flex flex-col items-center justify-center p-5">
  <div>
    <div class="flex w-32 justify-between">
      <a _target="blank" v-for=" (item, index) in socialLinks" :key="index" :href="item.url" class="link link-hover">
        <img class="filter grayscale hover:grayscale-0 w-6 h-6"
             :src="item.icon" :alt="item.name" />
      </a>
    </div>
  </div>
</section>

<footer class="footer p-5 justify-around">
  <div>
    <h1 class=" text-primary text-2xl ">
      <Link href="/" :preserve-scroll="true">
        StorkMentors
      </Link>
    </h1>
  </div>

  <div>
    <Link href="/terms-of-use" class="link link-hover">Terms of use</Link>
    <Link href="/privacy-policy" class="link link-hover">Privacy policy</Link>
  </div>

  <div>
    <Link href="/our-team" class="link link-hover">Our Team</Link>
    <Link href="/our-values" class="link link-hover">Our Values</Link>
    <Link href="/our-alumni" class="link link-hover">Our Alumni</Link>

    <Link href="/faqs" class="link link-hover">FAQs</Link>
    <Link href="/coding-career-stats" class="link link-hover">Coding Career Stats</Link>
    <Link href="/nurturing-the-nurturers" class="link link-hover">Nurturing the Nurturers</Link>
    <Link href="/contact-us" class="link link-hover">Contact Us</Link>
  </div>
</footer>
</template>

<script setup>
import { Link } from "@inertiajs/inertia-vue3"
import { path } from "@/helper/theme"

const socialLinks = [
    {
        name: "Facebook",
        url: "https://www.facebook.com/storkmentors",
        icon: path("assets/icons/facebook.svg")
    },
    {
        name: "Instagram",
        url: "https://www.instagram.com/storkmentors",
        icon: path("assets/icons/instagram-icon.svg")
    },
    {
        name: "LinkedIn",
        url: "https://www.linkedin.com/company/storkmentors",
        icon: path("assets/icons/linkedin-icon.svg")
    },
    //youtube-icon.svg
    {
        name: "Youtube",
        url: "https://www.youtube.com/@StorkMentors-sm2ox",
        icon: path("assets/icons/youtube-icon.svg")
    }
]

</script>

<style></style>
