<template>
<div>
  <header class="p-4 text-center">
    <h1 class="text-4xl font-bold  text-gray-800">
      StorkMentors WebDev School
    </h1>

    <Link as="a"
          href="/"
          class="mt-5 btn btn-outline btn-wide btn-primary px-10 py-0">
      Apply
    </Link>
  </header>

  <!-- is coding right for you -->
  <section>
    <div class="flex flex-col md:flex-row" >
      <figure class="w-full md:w-1/2">
        <img
          class="w-full h-full object-cover object-[left]"
          :src="path('images/wds-1.jpg')" />
      </figure>

      <div class="w-full md:w-1/2 mx-auto p-10  ">
        <h2>Is coding right for you?</h2>
        <p>
          If you consider earning potential, opportunities for growth, and flexibility in your schedule, learning to code is a fantastic choice for career change.
        </p>
        <p>
          Perhaps even more important, getting started as an earner doesn't require full time school or a college degree.
        </p>
        <p>
          If YOU:
        </p>

        <ul class="is-coding-right-bullets">
          <li> are curious and are good at asking questions </li>
          <li> are good at communicating </li>
          <li> like doing puzzles </li>
          <li> like learning new languages </li>
          <li> are a critical/analytical thinker </li>
          <li> are reliable and do what you say you will do </li>
          <li> have a creativity streak </li>
          <li> have an inkling for business sense </li>
          <li> are motivated and have a passion for knowledge </li>
        </ul>

        <p class="mt-10">
          If any of these are a YES for you, scroll on!
        </p>
      </div>
    </div>
  </section>

  <!-- What we teach -->
  <section>
    <div class="flex flex-col md:flex-row">
      <div class="w-full md:w-1/2 mx-auto p-10">
        <h2>
          What we teach
          <img class="" src="" alt="">
        </h2>

        <p>
          Our WebDev program is six months of intensive training followed by six months of support.
        </p>
        <p>
          In the first six months, <span class="font-bold">we teach coding fundamentals</span> in coding bootcamp--you'll know how to build a custom website from scratch. This phase is followed by career and portfolio development, prep for mock interviews and job networking, and learning essential business skills.
        </p>
        <p>
          We then place you as an intern working on real client projects, backed up and tutored by your Mentors. You'll already have a foot in the door and work to show on your resume and in your portfolio when you graduate from the intensive so that you can make the switch to a new career!
        </p>
        <p>
          The last six months is for ongoing support while you are getting your feet under you in the world of Web Development. We continue to teach tips and hacks in coding and business and walk with you through your first six months in the industry.
        </p>

        <!-- program detail btn -->
        <div class="flex justify-center">
          <Link as="a"
                href="/"
                class="mt-5 btn btn-outline btn-wide  px-10 py-0">
            Program Details
          </Link>
        </div>
      </div>
      <figure class="order-first md:order-last w-full md:w-1/2">
        <img
          class="w-full h-full object-cover object-center"
          :src="path('images/wds-2.webp')" alt="">
      </figure>
    </div>
  </section>

  <!-- Would you like a course outline? -->
  <section class="py-20">
    <div class="container m-auto px-10 text-center" >
      <h2 class="text-3xl">
        Would you like a course outline?
      </h2>
      <p class="mt-5 text-2xl">
        Our Student Advisor will send you any information you need and answer any questions you have so you can make an informed choice about your education.
      </p>
      <!-- contact us -->
      <Link as="a"
            href="/"
            class="mt-5 btn btn-outline btn-primary btn-wide  px-10 py-0">
        Contact Us
      </Link>
    </div>
  </section>

  <!-- How it works -->
  <section>
    <div class="flex flex-col md:flex-row" >
      <figure class="w-full md:w-1/2">
        <img
          class="w-full h-full object-cover object-center"
          :src="path('images/wds-3.webp')" />
      </figure>

      <div class="w-full md:w-1/2 mx-auto p-10  ">
        <h2 class="text-3xl">
          How it works
        </h2>
        <h3 class="mt-5 text-2xl">
          Everything is online.
        </h3>
        <p>Modules are released online each week of the program, so that you can plan your learning around your work, kids, vacations...life! </p>

        <h3 class="mt-5 text-2xl">
          We cap our class size at 24 seats.
        </h3>

        <p>
          Our WebDev School is not a massive push-and-play system. We want to have the right people in our program who are ready to do the work and lean in to our intimate community.
        </p>
      </div>
    </div>
  </section>

  <!-- Upcoming Cohorts -->
  <section>
    <div class="container m-auto ">
      <h2>Upcoming Cohorts</h2>
      <div class="overflow-x-auto grid place-items-center">
        <table class="table table-zebra table-md ">
          <thead>
            <tr >
              <th>Start Date</th>
              <th>6 Months Intensive</th>
              <th>6 Months Support</th>
              <th>Tuition</th>
              <th>Enroll By</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="cohort in cohorts">
              <td>{{ cohort.start_date }}</td>
              <td>{{ cohort.intensive }}</td>
              <td>{{ cohort.support }}</td>
              <td>{{ cohort.tuition }}</td>
              <td>{{ cohort.enroll_by }}</td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- apply btn -->
      <div class="mt-5 flex justify-center pb-20">
        <Link as="a"
              href="/"
              class="btn btn-outline btn-wide px-10 py-0">
          Apply
        </Link>
      </div>
    </div>
  </section>

  <!-- more resources -->
  <section >
    <div class="container mx-auto  ">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
        <!--
            v-for n in 4
           -->
        <div class="card w-46 glass"
             v-for="(resource,i) in resources" :key="i">
          <figure
            class="w-full h-40 overflow-hidden">
            <img
              class="w-full h-full object-cover object-center"
              :src="resource.image" />
          </figure>
          <div class="card-body">
            <h2 class="card-title">{{ resource.title }}</h2>
            <p> {{ resource.description }} </p>
            <div class="card-actions justify-end">
              <Link as="a"
                    href="/"
                    class="btn      ">
                {{ resource.label }}
              </Link>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
</template>

<script setup>
import { onMounted } from "vue"
import { Link } from "@inertiajs/inertia-vue3"
import { path } from "@/helper/theme"
import { gsap } from "gsap"
import { ScrollTrigger } from "gsap/ScrollTrigger"

// cohorts
const cohorts = [
    {
        start_date: "Aug 6",
        intensive: "Aug 6 - Feb 3",
        support: "Feb 4 - Aug 3",
        tuition: "$10,900",
        enroll_by: "July 30"
    },
    {
        start_date: "Oct 1",
        intensive: "Oct 1 - Mar 30",
        support: "Mar 31 - Sep 30",
        tuition: "$10,900",
        enroll_by: "Sep 29"
    },
    {
        start_date: "Dec 3",
        intensive: "Dec 3 - May 31",
        support: "Jun 1 - Dec 1",
        tuition: "$10,900",
        enroll_by: "Dec 2"
    }
]

// resources
const resources = [
    {
        title: "Program Details",
        image: path("images/wds-4.webp"),
        description: "All the FAQs about WebDev School, including tuition, payment plans, and more. ",
        href: "/program-details",
        label: "Program Details"
    },
    {
        title: "Your First 10k",
        image: path("images/wds-5.webp"),
        description: "Your First 10k in Coding Course Learn strategies to earn back your tuition investment, pronto. BONUS: YF10K is included in WebDev School tuition! ",
        href: "/your-first-10k-in-coding",
        label: "Your First 10k"
    },
    {
        title: "Our Alumni ",
        image: path("images/wds-6.png"),
        description: "Meet our fantastic students and see what they have to say about StorkMentors WebDev School. ",
        href: "/alumni",
        label: "Our Alumni"
    },
    {
        title: "Our Podcast",
        image: path("images/wds-7.png"),
        description: "Coding Cameos How'd they do it? Join us as we interview web dev professionals taking a non-linear path to a solid career in tech. ",
        href: "/podcast",
        label: "Our Podcast"
    }
]

onMounted(() => {
    gsap.registerPlugin(ScrollTrigger)

    // scroll trigger li bullet points
    gsap.from(".is-coding-right-bullets li", {
        scrollTrigger: {
            trigger: ".is-coding-right-bullets li",
            scrub: 1,
            start: "top 80%",
            end: "top 50%",
            markers: false,
            toggleActions: "restart none none reverse"
        },
        opacity: 0,
        x: 20,
        stagger: 0.5,
        duration: 1,
        ease: "power2.out"
    })

    //scroll trigger cards
    gsap.from(".card", {
        scrollTrigger: {
            trigger: ".card",
            scrub: 1,
            start: "top 80%",
            end: "top 50%",
            markers: false,
            toggleActions: "restart none none reverse"
        },
        opacity: 0,
        x: 20,
        stagger: 0.5,
        duration: 3,
        ease: "power2.out"
    })
})
</script>

<style scoped lang="scss">
.is-coding-right-bullets {
  list-style: none;
  padding-left: 0;
  margin-top: 1rem;
    li{
        padding: 0 10px;
    }
    li:before {
        content: "✔";
        margin-right: 0;
        padding:0 15px 0  10px;

        @apply text-primary;
    }
}
</style>