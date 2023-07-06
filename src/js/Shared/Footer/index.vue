<template>
<footer class="footer p-5">
  <div>
    <h1 class=" text-primary text-2xl ">
      <Link href="/" :preserve-scroll="true">
        StorkMentors
      </Link>
    </h1>
  </div>

  <div>
    <span class="footer-title">Social</span>

    <a _target="blank" v-for=" (item, index) in socialLinks" :key="index" :href="item.url" class="link link-hover">
      <img class="filter grayscale hover:grayscale-0 w-6 h-6"
           :src="item.icon" :alt="item.name" />
    </a>
  </div>

  <div>
    <span class="footer-title">Company</span>
    <Link href="/our-team" class="link link-hover">Our Team</Link>
    <a class="link link-hover">Contact</a>
    <a class="link link-hover">Jobs</a>
    <a class="link link-hover">Press kit</a>
  </div>

  <div>
    <span class="footer-title">Legal</span>
    <a class="link link-hover">Terms of use</a>
    <a class="link link-hover">Privacy policy</a>
    <a class="link link-hover">Cookie policy</a>
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
        url: "https://www.youtube.com/channel/UCQX6Z1Z0Z6X5Z9Z9Z9Z9Z9Z9",
        icon: path("assets/icons/youtube-icon.svg")
    }
]

</script>

<style></style>
