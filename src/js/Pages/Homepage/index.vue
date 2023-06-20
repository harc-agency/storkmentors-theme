<template>
<div>
    <div class=" bg-[#404040]
    bg-gradient-to-r from-secondary-focus to-secondary
    md:flex justify-between items-center p-5">
        <div class="lg:flex lg:justify-around align-middle">
            <h1 class="text-primary text-5xl lg:mr-12">StorkMentors</h1>
            <h2 class="text-white text-2xl self-end">A New Lease on Life</h2>
        </div>
        <div class="flex justify-between w-4/12 md:w-2/12 text-primary">
            <!-- search -->
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12">
                <path
                    stroke-width="1"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"/>
            </svg>

            <!-- smile -->
            <svg
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                height="24"
                preserveAspectRatio="xMidYMid meet"
                version="1.0"
                viewBox="-13.9 -3.6 412.1 414.4"
                width="412.1"
                fill="currentColor"
                class="w-12 h-12">
                <g>
                    <path
                        d="M382.8,110c-13.1-30.1-28-42.1-49.8-63.9c-26.6-26.6-39.5-35.4-77.2-43c-4.8-1-9.4-2.3-13.9-2.9c-4.6-0.6-9-0.4-13.6,1.2 c-32.6-5-70.8,7.9-98.8,22.9C44.2,70.1-13.9,155.2,2.9,255.4c13.4,79.7,89.9,131.5,164.9,143c80.5,12.4,171.4-17.5,210.3-93.2 c15.3-29.7,18.2-63.3,19.1-96C398.2,175.1,396.7,141.8,382.8,110z M385.1,208.8c-0.9,31-3.3,62.7-17.7,90.8 c-36.5,71-122.1,98.4-197.7,86.7c-70.2-10.8-142.3-58.5-154.8-133C-1,158.6,54.5,78.3,135.3,35.1c25.4-13.6,59.7-25.8,89.5-21.9 c1.7,1.2,4,1.4,6.1,0.4c4-2,7.9-1.7,11.9-0.9c3.5,0.6,7,1.6,10.7,2.4c34.7,6.9,46.5,15.2,71,39.7c20.6,20.6,34.9,31.7,47.2,60.1 C384.8,145,386,176.5,385.1,208.8z M171.1,101c2-2,2.5-5.2,0.8-7.7c-1.9-2.8-5.6-3.6-8.4-1.7c-2.1,1.4-3.5,3.5-4.1,6 c-0.5,1.9-0.5,4.1-0.7,5.8c-1.9,21.4-2.4,43.1-3.2,64.6c-0.6,17.9-5.7,37-2.1,54.9c0.6,3.3,3.8,5.4,7.1,4.8c3.3-0.7,5.4-3.9,4.8-7.1 c-3.4-16.9,1.8-35.1,2.4-52.1c0.7-21.3,1.2-42.7,3.1-63.9L171.1,101z M241.3,86c-3.7,12.2-0.4,29.7,0.1,42.4 c1.1,32.3,1.8,65.5,1.8,97.7c0,3.3,2.7,6.1,6.1,6.1c3.3,0,6.1-2.7,6.1-6.1c0-32.4-0.7-65.7-1.8-98.1c-0.4-11.5-4-27.3-0.6-38.4 c1-3.2-0.8-6.6-4-7.6C245.7,81,242.3,82.8,241.3,86z M87.1,245.1c-1.3,7,1.8,15.3,8,23.6c12.1,16,35.8,32.7,45.2,38.8 c51,33.1,120.9,22,163-20.1c8.3-8.3,19.3-18.2,23.8-29.4c1.2-3.1-0.3-6.6-3.4-7.9c-3.1-1.2-6.6,0.3-7.9,3.4 c-3.9,9.8-13.9,18.1-21.1,25.4C256.6,317,193.2,327.4,147,297.3c-7.6-4.9-25-17-36.9-29.8c-3.7-4-6.9-8-8.9-11.9 c-1.6-2.9-2.5-5.7-2.1-8.3c0.6-3.3-1.5-6.5-4.8-7.1C90.9,239.7,87.7,241.9,87.1,245.1z M328.4,266.8c1,1.8,3,3.1,5.3,3.1 c3.4,0,6.1-2.7,6.1-6.1c0-0.3,0-2.1-1.7-4.3c-2.9-3.9-17.6-21.7-19.3-23.2c-2.5-2.2-6.3-2-8.6,0.5c-2.2,2.5-2,6.3,0.5,8.6 c1.6,1.4,15,17.7,17.7,21.3L328.4,266.8z M71.4,250.8L71.4,250.8c-2.7,2-3.3,5.8-1.3,8.5c2,2.7,5.8,3.3,8.5,1.3h0l0,0l0,0l0.3-0.3 c0.4-0.3,1.2-0.9,1.7-1.1c0.9-0.4,1.7-1.1,2.2-1.8c0.5-0.4,0.9-0.7,1.3-1c8.7-7,16.8-13.2,24.8-21.1c2.4-2.4,2.4-6.2,0-8.6 c-2.4-2.4-6.2-2.4-8.6,0c-7.6,7.6-15.4,13.6-23.8,20.2C74.8,248.3,71.4,250.8,71.4,250.8L71.4,250.8z"
                        fill="currentColor"
                        stroke-width="3"/>
                </g>
            </svg>

            <!-- shopping bag -->
            <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="w-12 h-12">
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/>
            </svg>
        </div>
    </div>

    <section class="w-full bg-green-500 xs:bg-amber-500 sm:bg-blue-500 md:bg-red-500 lg:bg-orange-500"> </section>

    <section>
        <Slider :slides="slides" :delay="3000" :speed="1000" />
    </section>

    <section>
        <!-- When Change is imminent -->
        <div class="bg-[#ff9040]">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 place-content-center">
                <img :src="mediaObject.image.url" alt />
                <div class="p-4">
                    <h2 class="text-3xl font-bold">{{ mediaObject.title }}</h2>
                    <div
                        class="text-lg leading-10 font-semibold mb-4 mt-2"
                        v-html="mediaObject.description"></div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <!-- Where are you going? -->
        <div class="pt-8">
            <h1 class="text-center text-5xl mb-5">
                Where are
                <span class="text-primary">you</span>
                going?
            </h1>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div
                    class="card shadow-xl image-full bg-cover h-64 min-h-full"
                    v-for="(link, index) in linksItems"
                    :key="index"
                    :style="`background-image: url(${link.image})`">
                    <div class="card-body p-12">
                        <span>
                            <Link
                                as="button"
                                :href="link.url" class="btn btn-secondary hover:btn-primary">
                                <span class="card-title text-white">{{ link.title }}</span>
                            </Link>
                        </span>
                    </div>
                </div>
            </div>

            <!-- the secret of change -->
            <div class="relative my-10 w-9/12 m-auto" id="the_secret_of_change">
                <img :src="path('images/s26.jpg')" alt class="w-full" />
                <div class="absolute inset-0 bg-gradient-to-l from-transparent to-white">
                    <div class="text-1xl md:text-4xl font-bold p-0 md:p-10">
                        <div id="the_secret_of_change-0" class="text-2xl lg:mb-10 pl-[16px]">it has been said,</div>
                        <div id="the_secret_of_change-1" class="lg:mb-10 pl-[32px]">
                            'the secret of
                            <span class="text-primary">change</span> is to
                        </div>
                        <div id="the_secret_of_change-2" class="lg:mb-10 pl-[48px]">focus all of your energy</div>
                        <div
                            id="the_secret_of_change-3"
                            class="lg:mb-10 pl-[64px]">
                            not on fighting the old, but
                        </div>
                        <div id="the_secret_of_change-4" class="lg:mb-10 pl-[80px]">on building</div>
                        <div id="the_secret_of_change-5" class="lg:mb-10 pl-[96px]">the new.'</div>
                        <div
                            id="the_secret_of_change-6"
                            class="text-4xl md:text-7xl font-bold text-primary">
                            Let's build the new.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-10 bg-gray-50 overflow-hidden">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap -m-4">
                <div class="w-full md:w-1/2 p-4">
                    <div class="py-16 px-8 h-full rounded-3xl" :style="`background-image: url('${path('/images/Emails.png')}'); background-size: cover; background-position: center; background-repeat: no-repeat;`"></div>
                </div>
                <div class="w-full md:w-1/2 p-4">
                    <div class="py-16 lg:py-16 px-8 text-center h-full bg-white overflow-hidden rounded-3xl">
                        <div class="max-w-md mx-auto">
                            <h2 class="font-heading mb-8 text-4xl md:text-5xl text-gray-900 font-black tracking-tight">Subscribe and receive updates</h2>
                            <div class="max-w-sm mx-auto">
                                <div class="flex flex-wrap -m-2">
                                    <div class="w-full md:flex-1 p-2">
                                        <input class="px-6 py-3.5 w-full text-lg text-gray-500 font-bold bg-gray-100 outline-none focus:ring-2 focus:ring-secondary placeholder-gray-500 rounded-full" id="newsletterLightReverseInput2-1" type="text" placeholder="Email address">
                                    </div>
                                    <div class="w-full md:w-auto p-2">
                                        <div class="flex flex-wrap justify-center -m-2">
                                            <div class="w-full md:w-auto p-2"><a class="block w-full px-8 py-3.5 text-lg text-center text-secondary font-bold border bg-transparent hover:bg-primary focus:ring-2 focus:ring-primary rounded-full" href="#">Sign Up</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</template>

<script setup>
import Slider from "@/Components/Slider.vue"
import { Link, usePage } from "@inertiajs/inertia-vue3"
import { ref, reactive, computed, onMounted } from "vue"
import { gsap } from "gsap"
import { ScrollTrigger } from "gsap/ScrollTrigger"
import { path } from "@/helper/theme"

gsap.registerPlugin(ScrollTrigger)

const { props } = reactive(usePage()) // props.site, props.post, props.fields

const linksItems = ref([
    {
        url: "/podcasts",
        title: "Podcasts",
        // image: "/wp-content/themes/storkmentors-theme/dist/images/g1.webp"
        image: path("/images/g1.webp")
    },
    {
        url: "#",
        title: "WebDev School",
        image: path("/images/g2.webp")
    },
    {
        url: "#",
        title: "Live Online Classes",
        image: path("/images/g3.webp")

    },
    {
        url: "#",
        title: "Bi-Annual Summit",
        image: "/wp-content/themes/storkmentors-theme/dist/images/g4.webp"
    },

    {
        url: "#",
        title: "Our Library",
        image: "/wp-content/themes/storkmentors-theme/dist/images/g5.jpg"
    },
    {
        url: "#",
        title: "Downloads",
        image: "/wp-content/themes/storkmentors-theme/dist/images/g6.webp"
    },
    {
        url: "#",
        title: "Our Community",
        image: "/wp-content/themes/storkmentors-theme/dist/images/g7.jpg"
    },
    {
        url: "#",
        title: "1-1 Mentors",
        image: "/wp-content/themes/storkmentors-theme/dist/images/g8.webp"
    }
])

const slides = computed(() => {
    let slider = props.fields.page_sections.filter(
        section => section.acf_fc_layout === "slider"
    )
    if (slider.length) {
        return slider[0].slides
    }
    return []
})

const mediaObject = computed(() => {
    let mediaObject = props.fields.page_sections.filter(
        section => section.acf_fc_layout === "media_object"
    )
    if (mediaObject.length) {
        return mediaObject[0]
    }
    return []
})

onMounted(() => {
    document.querySelectorAll('[id^="the_secret_of_change-"]').forEach(el => {
        gsap.set(el, {
            opacity: 0,
            scale: 3,
            position: "relative",
            x: 100,
            y: 100
        })
    })
    // Create the ScrollTrigger
    gsap.registerPlugin(ScrollTrigger)

    //

    gsap.to('[id^="the_secret_of_change-"]', {
        scrollTrigger: {
            trigger: "#the_secret_of_change-0",
            start: "top center",
            end: "bottom center",
            scrub: 3
            //   markers: true
            //   toggleActions: "restart none reverse reverse" // onEnter onLeave onEnterBack onLeaveBack
        },
        opacity: 1,
        scale: 1,
        x: 0,
        y: 0,
        duration: 4,
        stagger: 3
    })
})
</script>

<style scoped>
</style>