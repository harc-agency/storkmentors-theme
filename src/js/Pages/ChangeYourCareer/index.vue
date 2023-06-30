<template>
<div>
  <section>
    <div class="grid grid-cols-1 sm:grid-cols-2  ">
      <div class="grid grid-cols-1  p-5 order-last sm:order-first  " >
        <h1 class="grid place-items-center
        text-primary text-4xl font-bold text-center  ">
          In our opinion,
        </h1>

        <p class="text-3xl font-bold ">
          breaking into tech is a great way to reinvent your career.
        </p>
      </div>

      <div class="">
        <img
          class="w-full h-full max-h-[400px]
            sm:max-h-fit-content
          object-cover object-top"
          :src="path('/images/cyc-1.jpg')"
          alt="In our opinion, breaking into tech is a great way to reinvent your career.">
      </div>
    </div>
  </section>

  <section>
    <div class="grid grid-cols-1 sm:grid-cols-2">
      <div class="relative">
        <img class="w-full h-full object-cover object-top"
             :src="path('/images/cyc-2.jpg')"
             alt="what we do">
        <svg
          id="svg-stars"
          class="absolute top-[4%] left-[4%] w-[12%] h-[12%]"
          xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid meet" version="1.0" viewBox="-0.5 -2.2 471.0 307.6" zoomAndPan="magnify" style="fill: rgb(246, 98, 62);" original_string_length="4484">
          <g id="__id120_s9c8itm0w7"><path d="M230.9,29.4c-1.5-0.8-3.6-1.3-6.4-1.3c-3.8,0-9.6,0.9-16.7,2.7c-13.2,3.4-31.6,9.7-50.2,16.6c-2.5-6-5-11.8-7.5-17.2 C144,16.5,138.3,6,134.6,2.3c-2.8-2.8-9-4.5-13.4,3.4c-3.9,7-10.5,30.1-17.4,46.7c-2.6,6.3-5.2,12.6-7.6,18.8 c-5.9,2.3-10.3,4-12.5,4.8C59,84.6,32.9,92.5,8.7,102.1c-1.6,0.6-4.4,1.9-5.8,3.1c-1.3,1.1-2,2.3-2.4,3.5c-1,2.7-0.8,5.4,1.8,8.1 c0.9,0.9,3,2.2,6.1,2.5c3.9,0.4,11.9-0.5,13.4-0.5c20,0,36.8,1.5,55.1,7.6c-6.1,19.6-11.2,39.5-15.7,60.2c-0.1,0.7-0.9,3.9-1.6,7.3 c-0.3,0.3-0.5,0.7-0.8,1.2c-0.3,0.5-1.9,4.7-2.8,7.8c-0.6,2.1-0.8,3.9-0.8,4.7c0.2,2.7,1.4,4.2,2.4,5.1c1.3,1.2,2.8,1.8,4.7,1.8 l0.4,0c1.3,1.5,3.2,2.4,5.3,2.4c1.7,0,3.9-0.5,6.3-1.7c3.2-1.7,7.5-5.1,12.5-9.8c13-12.6,31.5-35.4,47.5-55.3 c25.7,11.5,52.3,24.7,69.9,37.9c-0.2-0.1-0.5-0.5-0.5-0.5s3.1,2.6,5.1,2.9c1.2,0.2,2.9,0.2,5.2-0.9c3.3-1.6,4.2-4.2,3.8-7.3 c-0.1-0.6-0.4-3.1-3.3-5c-0.2-0.2-1.9-1-2.7-1.4c-11.7-16.1-17.6-38.8-25.3-56.9c-1.7-3.9-4.2-10.3-7.3-18.1 c11.1-9.7,22.1-19.6,32-30.4c10.2-11.2,18.7-21.4,21.9-27c2-3.5,2.4-6.3,2.2-7.9C234.8,32.5,233.3,30.6,230.9,29.4z M116.7,57.8 c5-12,9.7-27.5,13.4-37.4c2.2,4.2,4.7,9.6,7.4,15.6c2.3,5.1,4.7,10.6,7.1,16.3c-10.8,4.1-21.4,8.3-30.6,11.9 C114.9,62.1,115.8,59.9,116.7,57.8z M40,105.4c16.1-5.6,32.4-10.7,48.2-16.2c0.4-0.1,0.9-0.3,1.4-0.5c-2.9,8.1-5.8,16.2-8.4,24.4 C67.3,108.5,54.1,106.3,40,105.4z M86.9,185.2c-5.2,5.7-9.9,10.6-13.9,14c1-4.4,1.7-8.6,1.9-9.7c4.3-20,9.3-39.2,15.1-58.1 c9.4,3.8,20.1,8.2,31.3,13C109.9,158.5,97.5,173.6,86.9,185.2z M130.3,133.1c-13-5.6-25.4-10.7-36.1-15.1 C98.1,106,102.4,94,107,81.9c11.6-4.6,27-10.7,42.9-16.8c4.4,10.9,8.8,21.9,12.6,31.6c-2.2,1.9-4.4,3.9-6.6,5.9 C152,106.1,142.2,118.3,130.3,133.1z M188.1,161.2c-13.8-7.8-29.4-15.3-44.8-22.3c10.2-12.7,18.4-22.8,21.9-25.9l2.8-2.5 c2.3,5.8,4.2,10.6,5.6,13.8C178.5,135.7,182.8,148.9,188.1,161.2z M200.8,60.9c-8.4,9.2-17.7,17.8-27.1,26.1 c-3.3-8.5-7-17.7-10.7-26.8c11.7-4.3,23.3-8.4,33.5-11.7c7.2-2.3,13.7-4.1,19-5.3C211.5,48.3,206.1,55,200.8,60.9z M470.4,188.5 c0.1-2.4-0.6-5-2.8-7.9c-6.2-8.3-20.3-13.4-38.2-15.4c-12.2-1.4-26.4-1.4-40.4-0.9c-2.8-16.1-5.4-30.7-7.8-41.5 c-1.8-8.3-3.6-14.5-5.2-17.9c-1.6-3.3-3.5-5-5-5.7c-1.9-0.9-4.3-1.3-6.9,0.3c-0.7,0.4-1.8,1.2-2.7,2.5c-1.2,1.6-2.8,4.7-3,5.2 c-4.3,8.5-8.1,16.4-13.9,24c-9.4,12.3-17.8,24.9-25.7,37.8c-12.5-0.4-49.8-2.7-63.8,1.6c-9,2.7-11.5,8.5-9.6,14.1 c0.3,0.8,0.8,1.9,1.8,3.1c1.1,1.3,3.8,3.4,7.5,5.9c8.8,5.8,24.8,14.8,37.8,22.1c-4.7,8.8-9.4,17.7-14.2,26.7 c-10.9,20.4-20.1,40.6-21.6,43.8l-0.1,0.2c-0.1,0.3-0.2,0.5-0.3,0.8c-0.1,0.4-0.2,0.6-0.3,0.7c-0.1,0.3,1.8,3,4.3,5.1 c-1.6,1.6-2.1,3.3-2.2,4.5c-0.2,1.6,0.2,3.1,1.1,4.5c0.6,0.9,2.1,3.3,6.6,3.3c1.7,0,3.3-0.6,4.5-1.6c5.1,0,8.4-0.4,14.5-3 c12.1-5.2,22.9-12.1,34.2-19.1c13.5-8.5,27-17.6,40.9-26c4.4,2.6,8.9,5.3,13.2,8.1c11.6,7.6,20.8,18.1,32.1,25.7l0.9,0.9 c0.3,0.3,0.5,0.6,0.8,0.9c3.6,3.7,7.1,2.1,7.2,2c1.5-0.5,2.7-1.3,3.5-2.4c0.8-1.1,1.5-2.5,1.5-4.5c0-0.5,0-2-1.4-3.8 c-0.1-0.1-0.5-0.6-1.1-1.1l0.1,0.1c-1.3-1.3-2.5-3.6-3.7-6.7c-2.5-5.9-4.8-13.9-7.2-23.3c-1.3-5.4-2.7-11.2-3.9-17.3 c21.2-8.8,46.2-18,61.9-33.6C467.4,196.6,470.3,192.7,470.4,188.5z M257.9,284.7c2.2-2.4,4.6-2.3,5.9-2.1 C261.6,282.3,259.4,283.1,257.9,284.7z M269.8,289.7c0.1-1.5-0.4-2.9-1.2-4.1c0.8,1,1.4,2.4,1.3,4.1H269.8z M355.7,139.6 c4.4-5.8,7.9-11.7,11.1-17.9c1.4,6.1,3,13.9,4.6,22.7c1.2,6.4,2.4,13.4,3.7,20.6c-14.8,0.9-28.6,2.2-39.2,3.1 C342.1,158.4,348.6,148.9,355.7,139.6z M268.9,185.9c-1.6-1-3.3-2.1-4.9-3.1c0.4-0.1,0.7-0.1,1-0.2c12.8-1.7,32.9-0.9,45.9-0.3 c-4,6.9-7.9,14-11.8,21C289.2,197.8,277.6,191.2,268.9,185.9z M311.7,269.7c-10.6,6.7-20.8,13.2-32.3,18.2c-3.7,1.6-5.9,1.8-8.9,1.9 c3-6.5,11-23.6,20.2-40.8c4.8-8.9,9.4-17.7,14-26.4c3.6,2.1,6.3,3.6,7.5,4.5c10.9,7.7,22.5,14.2,34.1,20.7 C334.6,254.9,323.1,262.6,311.7,269.7z M359.8,239.4c-13.4-7.6-27-14.9-39.6-23.8c-1.3-0.9-4.6-2.8-8.9-5.3 c5.1-9.3,10.2-18.6,15.7-27.7c11-0.7,30.1-2.8,50.5-4c2.7,15.5,5.5,31.7,8.5,46.9C377.1,229.7,368.4,234.4,359.8,239.4z M380.8,251.9c-2.3-1.5-4.7-3-7.1-4.5c5-2.8,10.1-5.4,15.2-7.9c1.6,7.6,3.3,14.7,5,21.1l0.5,1.9 C390.1,258.8,385.7,255.1,380.8,251.9z M454,190.4c-13.9,13.8-35.7,21.9-54.8,29.6c-2.7-13.6-5.2-28.1-7.6-42 c12.7-0.4,25.3-0.2,36.4,1c7.2,0.8,13.6,2,18.9,3.9c3.8,1.4,7,3,9.1,5.3C455.4,188.9,454.5,189.8,454,190.4z" style="fill: inherit;"/></g>
        </svg>
      </div>

      <div class="grid grid-cols-1 p-5 bg-secondary text-white order-last leading-5">
        <h1 class="grid place-items-center text-4xl font-bold text-center">
          What we do
        </h1>

        <p class="text-md font-bold pb-2 ">
          If you are here, you are looking for higher earning potential, opportunities for growth, and flexibility in your schedule. You know the combination of stability and possibility has the power to reshape your life.
        </p>
        <p class="text-md font-bold pb-2 ">
          We agree. That's why we built a technical school focused on coding skills that translate into real earning potential. We also prioritize support of the 'whole person'. We know changing careers is a big deal, and it's also just a tiny snapshot of who you are. We understand the juggling act and we wove a culture of caring for and about each other into every thread of StorkMentors.
        </p>
        <p class="text-md font-bold pb-2 ">
          Here's how we do it:
        </p>

        <div>
          <ul class="my-10 grid grid-cols-1 md:grid-cols-2 gap-4">
            <Link as="li" href="" class=" btn hover:border-transparent hover:bg-yellow-200 hover:text-secondary">Live Online Classes</Link>
            <Link as="li" href="" class=" btn hover:border-transparent hover:bg-yellow-200 hover:text-secondary">WebDev School</Link>
            <Link as="li" href="" class=" btn hover:border-transparent hover:bg-yellow-200 hover:text-secondary">1:1 Mentors</Link>
            <Link as="li" href="" class=" btn hover:border-transparent hover:bg-yellow-200 hover:text-secondary">Our Summit</Link>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="text-center p-4 md:p-10">
    <div class="flex justify-center mt-10">
      <h1
        class="text-4xl font-bold relative">
        <span>Talk to Our Team.</span>
        <img
          class="spiral w-12 h-12 absolute  "
          :src="path('images/cyc-spiral.png')" alt="">
      </h1>
    </div>
    <p class="mt-5 w-11/12 m-auto ">
      Schedule a call with our Student Advisor to discuss how we can help get you where you want to be.
    </p>
    <div>
      <button
        class="mt-5 relative py-0 btn btn-secondary">
        Contact Us
        <img

          class="contact_us_icon_left w-10 h-10 absolute top-0 -left-10 -rotate-45"
          :src="path('/images/cyc-lines.png')">
        <img
          class="contact_us_icon_right w-10 h-10 absolute top-0 -right-10 rotate-[125deg]"
          :src="path('/images/cyc-lines.png')">
      </button>
    </div>
  </section>

  <MeetMentors />
</div>
</template>

<script setup>
import MeetMentors from "@/Components/MeetMentors"

import { path } from "@/helper/theme"
import { onMounted } from "vue"
import { gsap } from "gsap"

onMounted(() => {

    // contact_us_icon_left and contact_us_icon_right
    const tl = gsap.timeline({ repeat: -1, yoyo: true })

    // spiral
    tl.fromTo(".spiral", {

        rotation: 180,
        top: -10,
        right: -25,
        scale: 1,
        ease: "power3.inOut"
    }, {
        rotation: "+=25",
        scale: 1.1

    })

    //contact_us_icon_left
    tl.fromTo(".contact_us_icon_left", {
        rotation: -45,
        ease: "power3.inOut"
    }, {
        scale: 1.3
    })

    //contact_us_icon_right
    tl.fromTo(".contact_us_icon_right",
        {
            rotation: 125
        }, {
            scale: 1.3
        })

    //svg-stars
    tl.fromTo("#svg-stars", { }, { scale: 1.3 })

})
</script>

<style lang="scss">
// #app {
//     // first a tag make it primary

//     header{
//         #logo{
//             @apply text-primary;
//         }

//         @apply bg-white text-secondary;

//         #logo{
//             @apply text-primary;
//         }
//     }
//     #main-menu-desktop > ul > li > details > ul{
//         @apply bg-white;

//         &:hover {
//             @apply bg-slate-100 text-secondary;

//             li{

//                 &:hover {@apply bg-base-200;}

//             }
//         }

//     }
// }
</style>