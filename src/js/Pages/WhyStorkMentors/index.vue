<template>
<div>
  <section class="lg:p-10 bg-[#404040]
    bg-gradient-to-r from-secondary-focus to-secondary
       items-center p-5">
    <div class="flex flex-col px-5 lg:px-10   md:w-8/12 m-auto  text-center">
      <h2 class="-ml-64 text-white text-2xl">why</h2>
      <h1 class="font-bold  text-primary text-4xl">StorkMentors</h1>
      <p class="  text-white">We help people reinvent themselves and shift the [non-linear] trajectory of their lives, and we do so with attentive care and kindness.</p>
    </div>
  </section>

  <section
    class="flex flex-col items-left justify-center">
    <div class="relative flex flex-col">
      <img
        class="sm:max-h-[300px] lg:max-h-[500px]   object-cover object-top w-full h-full"
        :src="path('images/why-storkmentors-header.webp')" >
      <div
        class="lg:absolute
        right-0 p-5 lg:p-10 lg:leading-9 sm:text-xl  w-full lg:w-1/3 m-auto">
        <p class="font-bold text-2xl lg:text-4xl lg:text-left mb-4">
          What if, <span class=" border-b-2 border-primary ">
            right now
          </span>,
        </p>
        <p class="lg:text-right mb-2">
          you could step through to a place where you were
          instantly surrounded by a professional community
          --of mentors and colleagues--
          who 'got' you.
        </p>
        <p class="lg:text-right mb-2">
          Who know what it's like to wear all the hats,
          are there to celebrate your wins
          and to encourage you when you come up short,
          who help you track what's important
          and help you get to the 'other side'.
        </p>
        <p class="lg:text-right mb-2">
          We are that place.
          We prioritize people first and always,
          and we aspire to bring warmth and humanity
          to those pivotal life chapters of reinvention.
        </p>
      </div>
    </div>
  </section>

  <section
    class="flex flex-col items-center justify-center p-10 ">
    <div
      class=" ">
      <h1
        class="text-4xl text-primary font-bold text-center mb-5">
        Our Values
      </h1>

      <ul class="text-center mb-5 text-3xl leading-10">
        <li>Empathy</li>
        <li>Respect</li>
        <li>Clarity</li>
        <li>Curiousity</li>
        <li>Joy</li>
      </ul>
      <p class="w-1/2 m-auto text-center text-2xl">
        We are committed to creating an educational environment where everyone can do their best and be themselves.
      </p>
    </div>
  </section>

  <!--
    2 column section
   -->
  <section
    class="flex flex-col lg:flex-row items-center justify-center   bg-secondary">
    <div class="flex flex-col items-center justify-center lg:w-1/2">
      <img :src="path('images/what-we-do.webp')"
           class="w-full h-full object-cover object-top" alt="">
    </div>
    <div class="relative flex flex-col items-center justify-center lg:w-1/2 lg:p-25 bg-secondary text-white p-10">
      <h1 class="text-4xl text-white font-bold text-center mb-5">
        What we do
        <svg
          class="absolute top-[42px] left-[73%]   w-20 h-20"
          style="transform: rotate(45deg);"

          viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg">
          <defs></defs>
          <g id="__id114_s2rbwev4gv" transform="matrix(0.049555, 0, 0, 0.049555, 5.124878, 11.537509)" style="">
            <path d="M392.2,0c14.7,2.2,29.4,4.6,44.1,6.6c28.6,4.1,35.1,11.1,32.3,38.3c-12.2,122.2-24.6,244.5-37.1,366.7 c-0.8,8.2,0.1,16.7-2,24.5c-1.5,5.8-6.6,10.6-10.1,15.9c-4.2-5.2-11.1-9.9-12.1-15.6c-8.1-48.5-15.7-97-22.4-145.7 c-12.3-89.9-24-179.8-35.3-269.8c-0.8-6.7,2.9-13.9,4.5-20.9H392.2z M414.2,346.7l2.7-0.5c11.3-104.5,22.5-209.1,34-315.7l-82.6-9.9 C383.8,130.4,398.9,238.6,414.2,346.7L414.2,346.7z M238.1,463.5c-1.8,3.1-3.4,9.6-6.7,10.6c-4.4,1.3-11.8,0.1-14.9-3 c-7.9-8.1-15-17.1-21-26.7C122.1,328.7,59.2,207.5,3.2,82.6C-1.3,72.7-2.5,63,9.4,59.2c26.3-8.3,53-15.6,79.9-22.3 c15.9-4,23.7,4.1,28.3,19.6c38.5,131.5,77.7,262.8,116.7,394.2L238.1,463.5z M182.4,387.3l6.8-2.5 c-32.7-107.7-65.5-215.3-99.3-326.3L23.4,80.3C77.2,184.2,129.8,285.7,182.4,387.3L182.4,387.3z M796,192.6c-2.9,4.5-5.5,9.5-9,13.7 c-77.9,92.2-155.8,184.4-233.8,276.5c-5.7,6.7-10.1,14.7-16.5,20.5c-3.3,3-9.6,2.7-14.5,3.9c-0.9-4.5-3.7-9.8-2.2-13.3 c6.3-15.1,14-29.6,21-44.4C589.3,347,637.7,244.5,686,142c17-36.2,21.4-39.2,52.8-14.5c20.4,16,36.3,37.8,54.1,57.1 C794.5,186.3,794.8,189.2,796,192.6z M586.5,405.9l2.9,3.1c59.5-70.4,119.1-140.6,178.2-211.4c3-3.5,3.5-13.8,0.8-16.5 c-17.5-17.4-36.2-33.5-55.3-50.8C669.4,225.3,628,315.6,586.5,405.9z" style="fill: rgb(255, 144, 64);"></path>
          </g>
        </svg>
      </h1>

      <div class="">
        <p class="mb-2">
          We aspire to bring warmth and humanity to those pivotal life chapters of reinvention.
        </p>
        <p class="mb-2">
          We began StorkMentors to lower barriers to professional success for folks who found themselves up for a new lease on life.
        </p>
        <p class="mb-2">
          What started out as a 'better coding bootcamp' became a Skills School & Personal Development Company where we teach technical, professional and soft skills in a whole-person way, and where we nurture each other toward a better version of ourselves.
        </p>
      </div>

      <h1 class="text-3xl text-white font-bold text-center mb-5">
        How we do it:
      </h1>
      <div>
        <ul class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <Link as="li" href="" class=" btn hover:border-transparent hover:bg-yellow-200 hover:text-secondary">Live Online Classes</Link>
          <Link as="li" href="" class=" btn hover:border-transparent hover:bg-yellow-200 hover:text-secondary">WebDev School</Link>
          <Link as="li" href="" class=" btn hover:border-transparent hover:bg-yellow-200 hover:text-secondary">1:1 Mentors</Link>
          <Link as="li" href="" class=" btn hover:border-transparent hover:bg-yellow-200 hover:text-secondary">Our Summit</Link>
        </ul>
      </div>
    </div>
  </section>

  <MeetMentors />
</div>
</template>

<script setup>
import { path } from "@/helper/theme"
import { Link } from "@inertiajs/inertia-vue3"
import MeetMentors from "@/Components/MeetMentors"
</script>

<style scoped lang="scss">

</style>