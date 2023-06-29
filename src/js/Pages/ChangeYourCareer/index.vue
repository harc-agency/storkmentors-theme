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
          :src="path('/images/change-your-career-hero.jpg')"
          alt="In our opinion, breaking into tech is a great way to reinvent your career.">
      </div>
    </div>
  </section>

  <section>
    <div class="grid grid-cols-1 sm:grid-cols-2">
      <div class="">
        <img class="w-full h-full object-cover object-top"
             :src="path('/images/cyc-2.jpg')"
             alt="what we do">
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
    <div class="w-6/12 sm:w-4/12 m-auto">
      <h1
        class="relative text-4xl font-bold text-center">
        Talk to Our Team.
        <img
          class="spiral w-12 h-12 absolute right-0"
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
</div>
</template>

<script setup>
import { path } from "@/helper/theme"
import { onMounted } from "vue"
import { gsap } from "gsap"

onMounted(() => {

    // contact_us_icon_left and contact_us_icon_right
    const tl = gsap.timeline({ repeat: -1, yoyo: true })

    // spiral
    tl.fromTo(".spiral", {
        duration: .5,
        rotation: 180,
        top: -10,
        right: -20,
        ease: "power3.inOut"
    }, {
        duration: .9,
        rotation: "+=15",
        ease: "power3.inOut"
    })

    tl.fromTo(".contact_us_icon_left", {
        duration: .5,
        rotation: -45,
        scale: .9,
        ease: "power3.inOut"
    }, {
        duration: .9,
        scale: 1,
        ease: "power3.inOut"
    },
    "-=1" )

    tl.fromTo(".contact_us_icon_right", {
        duration: .5,
        rotation: 125,
        scale: 0.9,
        ease: "power3.inOut"
    }, {
        duration: 1,
        scale: 1,
        ease: "power3.inOut"
    },
    "-=1" )
})
</script>

<style scoped>

</style>