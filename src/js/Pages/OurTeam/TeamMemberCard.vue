<template>
<div class="team-member-card flip-card flex flex-col items-center p-5 rounded-sm">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img class="rounded-full w-40 h-40 object-cover" :src="teamMember.image" alt="">
      <h1
        class="text-white mt-3">
        {{teamMember.name}}
      </h1>
      <p class="text-white">
        {{ teamMember.title }}
      </p>
    </div>
    <div class="flip-card-back">
      <p>
        {{ teamMember.slogan }}
      </p>
      <div>
        <Link
          :href="teamMember.link"
          class="btn btn-primary w-full h-full">
          Learn more
        </Link>
      </div>
    </div>
  </div>
</div>
</template>

<script setup>
import { onMounted } from "vue"
import { Link } from "@inertiajs/inertia-vue3"
import { gsap } from "gsap"

// set up teamMember as a prop
defineProps({
    teamMember: {
        type: Object,
        required: true
    }
})

// on mounted, set up the animation
onMounted(() => {
    const tl = gsap.timeline({ paused: true })
    tl.to(`.team-member-card`, {
        duration: 0.5,
        scale: 1.1,
        ease: "elastic.easeInOut"
    })
    tl.to(`.team-member-card`, {
        duration: 0.5,
        scale: 1,
        ease: "power1.inOut"
    })
    tl.play()
})

</script>

<style scoped lang="scss">
.flip-card {
  background-color: transparent;
  width: 300px;
  height: 300px;
  perspective: 5000px; // Remove this if you don't want the 3D effect
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front,
.flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  @apply text-white bg-primary;
  color: black;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.flip-card-back {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  background-color: #404040;
  color: white;
  transform: rotateY(180deg);
  padding: 20px;
}

</style>