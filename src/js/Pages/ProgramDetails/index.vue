<template>
<div>
  <header class="p-20 flex flex-col justify-center
   items-center text-primary text-3xl">
    <!-- Reinventing Coding Education -->
    <h1 class="text-4xl font-bold ">
      Reinventing Coding Education
    </h1>

    <Link href="/apply" class="mt-5 btn btn-primary font-bold btn-wide btn-outline">
      Apply
    </Link>
  </header>

  <section>
    <div
      class="grid grid-cols-1 sm:grid-cols-2">
      <div class="grid grid-cols-1  p-5 lg:p-20 order-last sm:order-first " >
        <h2
          class="w-64 mb-4  ">
          Here's what is different about
          StorkMentors
          WebDev School...
        </h2>

        <p>We aren't just a coding bootcamp.</p>
        <p>We help people reinvent themselves by teaching marketable skills with attentive care and kindness.</p>
        <p>We've been where you are and know what it's like to try and get started. </p>
        <p>We've got you.</p>
      </div>
      <div
        class="relative grid grid-cols-1 p-5">
        <svg class="spikes absolute top-[20%] left-[50%] w-20 h-20" style="transform:rotate(45deg);" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg"> <g transform="matrix(0.049555, 0, 0, 0.049555, 5.124878, 11.537509)" > <path d="M392.2,0c14.7,2.2,29.4,4.6,44.1,6.6c28.6,4.1,35.1,11.1,32.3,38.3c-12.2,122.2-24.6,244.5-37.1,366.7 c-0.8,8.2,0.1,16.7-2,24.5c-1.5,5.8-6.6,10.6-10.1,15.9c-4.2-5.2-11.1-9.9-12.1-15.6c-8.1-48.5-15.7-97-22.4-145.7 c-12.3-89.9-24-179.8-35.3-269.8c-0.8-6.7,2.9-13.9,4.5-20.9H392.2z M414.2,346.7l2.7-0.5c11.3-104.5,22.5-209.1,34-315.7l-82.6-9.9 C383.8,130.4,398.9,238.6,414.2,346.7L414.2,346.7z M238.1,463.5c-1.8,3.1-3.4,9.6-6.7,10.6c-4.4,1.3-11.8,0.1-14.9-3 c-7.9-8.1-15-17.1-21-26.7C122.1,328.7,59.2,207.5,3.2,82.6C-1.3,72.7-2.5,63,9.4,59.2c26.3-8.3,53-15.6,79.9-22.3 c15.9-4,23.7,4.1,28.3,19.6c38.5,131.5,77.7,262.8,116.7,394.2L238.1,463.5z M182.4,387.3l6.8-2.5 c-32.7-107.7-65.5-215.3-99.3-326.3L23.4,80.3C77.2,184.2,129.8,285.7,182.4,387.3L182.4,387.3z M796,192.6c-2.9,4.5-5.5,9.5-9,13.7 c-77.9,92.2-155.8,184.4-233.8,276.5c-5.7,6.7-10.1,14.7-16.5,20.5c-3.3,3-9.6,2.7-14.5,3.9c-0.9-4.5-3.7-9.8-2.2-13.3 c6.3-15.1,14-29.6,21-44.4C589.3,347,637.7,244.5,686,142c17-36.2,21.4-39.2,52.8-14.5c20.4,16,36.3,37.8,54.1,57.1 C794.5,186.3,794.8,189.2,796,192.6z M586.5,405.9l2.9,3.1c59.5-70.4,119.1-140.6,178.2-211.4c3-3.5,3.5-13.8,0.8-16.5 c-17.5-17.4-36.2-33.5-55.3-50.8C669.4,225.3,628,315.6,586.5,405.9z" style="fill:rgb(255, 144, 64);"> </path> </g> </svg>
        <img
          class="w-full h-full max-h-[400px] sm:max-h-fit-content object-cover object-top"
          :src="path('/assets/images/pd-1.png')"
          alt="">
      </div>
    </div>
  </section>

  <section>
    <div class="text-center">
      <h2>
        Program Details
      </h2>
      <h3>
        Our 12-month WebDev School has 4 phases.
      </h3>
    </div>

    <div class="grid   grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5 p-5 ">
      <div v-for="(phase,i) in phases" :key="i">
        <div class="text-center">
          <div
            class="lg:hidden">
            Phase: {{ phase.phase }}
          </div>
          <h3 class="">
            {{ phase.time }}
          </h3>
          <h4>
            {{ phase.title }}
          </h4>
        </div>

        <!-- make all image the same size -->
        <div class="flex justify-center relative">
          <img :src="phase.image" alt="" class="w-full h-full max-h-[150px] lg:max-h-[150px] object-cover">
        </div>

        <div class="text-center bg-[#ff9040] lg:min-h-[400px] md:min-h-[250px] p-4">
          <div v-html="phase.descriptionHTML"></div>
          <!-- force height to be the same in all -->
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="text-center my-20">
      <h2>
        Would you like a course outline? <br>
        An example lesson?
      </h2>
      <p
        class="max-w-[600px] mx-auto mt-5">
        Our Student Advisor will send you any information you need and answer any questions you have
        so you can make an informed choice about your education.
      </p>

      <!-- give it space -->
      <div class="mt-5">
        <Link href="/contact" class="btn btn-primary btn-outline">
          Contact Us
        </Link>
      </div>
    </div>
  </section>

  <!--
    <section>
    <h2 >
      <span>
        Some FAQs
        <img :src="path('/assets/images/question-mark.png')" alt="" class="question-mark h-6 inline-block">
      </span>
    </h2>

    <div >
      <div v-for="(faq,i) in faqs" :key="`faq-${i}`">
        <div class="flex justify-between items-center">
          <h3 class="flex-1">
            {{ faq.question }}
          </h3>
          <button
            @click="faq.open = !faq.open"
            class="btn btn-primary btn-outline">
            {{ faq.open ? 'Close' : 'Open' }}
          </button>
        </div>
      </div>

      <div v-if="faq.open" class="mt-5">
        <div v-html="faq.answer"></div>
      </div>
    </div>
  </section> -->

  <!-- redo that faq sections  -->

  <section>
    <div class="text-center my-20">
      <h2>
        Some FAQs
        <img :src="path('/assets/images/question-mark.png')" alt="" class="question-mark h-6 inline-block">
      </h2>

      <div class="grid grid-cols-1   gap-5 p-5">
        <div v-for="(faq,i) in faqs" :key="`faq-${i}`">
          <div class="collapse bg-ternary text-white rounded-lg">
            <input type="checkbox" />
            <div class="collapse-title text-xl font-medium">
              {{ faq.question }}
            </div>
            <div class="collapse-content">
              <div v-html="faq.answer"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <UpcomingCohorts />
</div>
</template>

<script setup>
import UpcomingCohorts from "@/components/UpcomingCohorts.vue"

import { Link } from "@inertiajs/inertia-vue3"
import { path } from "@/helper/theme"
import { gsap } from "gsap"
import { onMounted } from "vue"

onMounted(() => {
    gsap.from(".spikes", {
        opacity: 0,
        x: 20,
        stagger: 0.5,
        duration: 2,
        ease: "power2.out"
    })

})

const phases = [
    {
        phase: "1",
        time: "12 Weeks",
        image: path("/assets/images/pd-item1.webp"),
        title: "Coding Bootcamp",
        descriptionHTML: `
        <p>Our Coding Mentors teach HTML, CSS, and JavaScript, and how to build a wordpress site with  server-side scripting languages like PHP and database management with MySQL. If you don't know what that means, check this out. </p>
        <p>Fun fact: 43% of all websites are on wordpress.  If you can Wordpress, you can be a web developer!</p>
        `
    },
    {
        phase: "2",
        time: "6 Weeks",
        image: path("/assets/images/pd-item2.webp"),
        title: "Career & Business",
        descriptionHTML: `
       <p>In our career modules, we teach resume building, networking and job inquiry etiquette, conduct mock interviews and how to build a professional social media profile.</p>
        <p>We also explore how to approach discovery with clients, estimates, contracts, communication, invoicing, and how to develop long term habits for success personally and professionally.</p>
        `
    },
    {
        phase: "3",
        time: "6 Weeks",
        image: path("/assets/images/pd-item3.webp"),
        title: "Internship",
        descriptionHTML: `
        <p>We partnered with real dev shops and agencies to give you opportunities to work on real client projects and build your work portfolio, before you ever get out the door. </p>
        <p>During this phase, our coding mentors will tutor you to a successful site build to help you get great referrals for future agencies or clients, and help you get started in your new career.</p>
        `
    },
    {
        phase: "4",
        time: "6 Weeks",
        image: path("/assets/images/pd-item4.webp"),
        title: "Ongoing Support",
        descriptionHTML: ` <p>A continuation of group mentorship from Senior Developers, including ongoing workshops, weekly tips, and industry hacks to assist you in your continued learning as you adjust to the tech industry, whether you are self-employed or work with an agency.</p> `
    }

]
const faqs = [

    {
        question: "What is the cost of the program?",
        answer: "The cost of the program is $10,900. We offer a variety of payment options, including a 12-month payment plan.  We also offer a $1000 discount for students who pay in full.",
        open: false
    },
    {
        question: "How much time will it take?",
        answer: "You can do asynchronous work on your own time, but we recommend 20 hours per week to get the most out of the program.",
        open: false
    },
    {
        question: "Do I talk directly to the mentors?",
        answer: "Yes! We have weekly group mentorship sessions, and you can book 1:1 time with your mentor as needed.",
        open: false
    },
    {
        question: "Where and when are classes taught?",
        answer: "Classes are taught online, and you can access them at any time",
        open: false
    },
    {
        question: "I have a full time job/I'm a parent. Can I do this on nights and weekends?",
        answer: "Yes! You can do the work on your own time",
        open: false
    },
    {
        question: "What if I have zero coding experience?",
        answer: "No problem! We start from the beginning and teach you everything you need to know.",
        open: false
    },
    {
        question: "What if I get behind?",
        answer: "No problem! We have a team of mentors to help you get caught up.",
        open: false
    },
    {
        question: "What kind of coding is this?",
        answer: "We teach HTML, CSS, JavaScript, PHP, and MySQL.  We also teach you how to build a wordpress site.",
        open: false
    }

]
</script>

<style scoped>
</style>