<template>
<div>
  <section class="lg:p-10 bg-[#404040]
    bg-gradient-to-r from-secondary-focus to-secondary
       items-center p-5">
    <div class="flex flex-col px-5 lg:px-10 w-full lg:w-1/3 m-auto ">
      <h2 class="text-white text-2xl text-center lg:text-left">our team at</h2>
      <h1 class="text-primary text-4xl text-center">StorkMentors</h1>
      <p class="text-white text-center">We collected up the very best.</p>
    </div>
  </section>

  <section class="" >
    <div
      class="@[400px]:bg-slate-500 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5 p-5">
      <TeamMemberCard
        v-for="(teamMember, i) in teamMembers"
        :key="i"
        :teamMember="teamMember"/>
    </div>
  </section>
</div>
</template>

<script setup>
import { path } from "@/helper/theme"
import TeamMemberCard from "@/Pages/OurTeam/TeamMemberCard.vue"
// base on the data above, create the json for the cards
const teamMembers = [
    {
        name: "Dustin Woodard",
        title: "Web Dev Mentor",
        image: path("/images/dustin-woodard.webp"),
        slogan: "So can we automate this?",
        link: "#"
    },
    {
        name: "Tanner Holm",
        title: "Web Dev Mentor",
        image: path("/images/tanner-holm.webp"),
        slogan: "Yeah, I should be able to do that.",
        link: "#"

    },
    {
        name: "Leslie Judd",
        title: "Business Mentor",
        image: path("/images/leslie-judd.webp"),
        slogan: "I have an idea!",
        link: "#"
    },
    {
        name: "Brent Bland",
        title: "Operations",
        image: path("/images/brent-bland.webp"),
        slogan: "I already created a system for that, would you like to see it?",
        link: "#"
    },
    {
        name: "Jessica Olson",
        title: "Student Advisor",
        image: path("/images/jessica-olson.jpg"),
        slogan: "You've got this! Look how far you've come!",
        link: "#"
    },
    {
        name: "Kate Stevenson",
        title: "Joy Mentor",
        image: path("/images/kate-stevenson.jpg"),
        slogan: "You are amazing!",
        link: "#"
    },
    {
        name: "Corey Holm",
        title: "Operations",
        image: path("/images/user-default.jpg"),
        //corey is the CFO, he needs a good slogan
        //something related to money and funny, but not too funny
        slogan: "I'm not sure if that's in the budget.",
        link: "#"

    },
    {
        name: "Someone Like you",
        title: "Mentor",
        image: path("/images/finger-pointing.jpg"),
        slogan: "This could be you here!",
        link: "#"

    }
]

</script>

<style scoped>
</style>