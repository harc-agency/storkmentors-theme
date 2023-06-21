<template>
<header class="flex align-center p-4 bg-secondary text-white">
  <a href="/" class="text-white">
    <Logo />
  </a>

  <!-- mobile menu -->
  <div class="dropdown lg:hidden">
    <label tabindex="0" class="btn btn-ghost">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
           class="h-5 w-5"
           fill="none" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round"
              stroke-width="2" d="M4 6h16M4 12h8m-8 6h16"/>
      </svg>
    </label>

    <ul id="main-menu-mobile" tabindex="0"
        class="  text-[.75em] justify-start dropdown-menu
              shadow menu max-w-xs w-64 bg-secondary dropdown-content">
      <!-- dropdown-content -->
      <li v-for=" (link, index) in page.props.menu" :key="index">
        <details open v-if="link.children.length"
                 class="border border-t-0 border-l-1 border-r-0 border-b-0 border-neutral-400">
          <summary class=" "> {{ link.title }} </summary>
          <ul class="ml-1 justify-start">
            <li v-for=" (child, i) in link.children" :key="i"
                class="ml-n3 border border-t-0 border-l-1 border-r-0 border-b-0 border-neutral-400" >
              <details open v-if="child.children.length" class="ml-3">
                <summary>{{ child.title }}</summary>
                <ul class="ml-1 ">
                  <li v-for="(grandchild, j) in child.children" :key="j"
                      class="ml-n3 border border-t-0 border-l-1 border-r-0 border-b-0 border-neutral-400">
                    <details v-if="grandchild.children.length">
                      <summary>{{ grandchild.title }}</summary>
                      <ul
                        class="ml-3">
                        <li v-for=" (greatgrandchild, k) in grandchild.children" :key="k" class="ml-4">
                          <Link :href="greatgrandchild.url" class="   ">
                            {{ greatgrandchild.title }}
                          </Link>
                        </li>
                      </ul>
                    </details>
                    <Link v-else :href="grandchild.url" class="   ">
                      {{ grandchild.title }}
                    </Link>
                  </li>
                </ul>
              </details>
              <Link as="a" v-else :href="child.url" class="    ">
                {{ child.title }}
              </Link>
            </li>
          </ul>
        </details>
        <Link v-else :href="link.url"
              :class="{
                'active' : isCurrentUrl(link.url),
                'active1' : isCurrentUrl(link.url)
              }"
              class="decoration-none">
          {{ link.title }}
        </Link>
      </li>
    </ul>
  </div>

  <!-- desktop -->
  <div id="main-menu-desktop" class="relative navbar-center hidden lg:flex">
    <ul class="flex ">
      <li tabindex="0" v-for=" (link, index) in page.props.menu" :key="index">
        <details v-if="link.children.length">
          <summary class="btn btn-ghost text-sm btn-sm rounded-btn">
            <span class="text-sm">
              {{ link.title }}
            </span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
            </svg>
          </summary>
          <ul class="  flex flex-col bg-secondary p-2 absolute    ">
            <li v-for=" (children, index) in link.children"
                :key="index"
                class="btn btn-ghost hover:bg-[#505050]">
              <details v-if="children.length">
                <summary> {{ children.title }} </summary>
                <ul>
                  <li v-for=" (grandchild, index) in children.children" :key="index">
                    <details v-if="grandchild.children.length">
                      <summary> {{ grandchild.title }} </summary>
                      <ul>
                        <li v-for=" (greatgrandchild, index) in grandchild.children" :key="index">
                          <Link
                            v-if="greatgrandchild.url === page.url"
                            :href="greatgrandchild.url" class=" btn btn-ghost btn-sm  ">
                            {{ greatgrandchild.title }}
                          </Link>
                          <a
                            v-else
                            :href="greatgrandchild.url" class=" btn btn-ghost btn-sm  ">
                            {{ greatgrandchild.title }}
                          </a>
                        </li>
                      </ul>
                    </details>
                    <Link
                      :class="{'active': isCurrentUrl(link.url)}"
                      v-else :href="grandchild.url" class=" btn btn-ghost btn-sm  ">
                      {{ grandchild.title }}
                    </Link>
                  </li>
                </ul>
              </details>

              <Link :href="children.url"
                    as="a"
                    :class="{'link': isCurrentUrl(link.url)}"
                    class="btn btn-ghost btn-sm rounded-btn">
                {{ children.title }}
              </Link>
            </li>
          </ul>
        </details>

        <Link v-else
              :class="{'link': isCurrentUrl(link.url)}"
              :href="link.url" class="btn btn-ghost btn-sm rounded-btn">
          {{ link.title }}
        </Link>
      </li>
    </ul>
  </div>
</header>
</template>

<script setup>
import Logo from "@/Shared/Logo.vue"
import { Link, usePage } from "@inertiajs/inertia-vue3"
import { onMounted, reactive } from "vue"

const page = reactive(usePage())

//make reactive
const isCurrentUrl = url => (new URL(url, window.location.origin)).pathname === window.location.pathname

onMounted(() => {
    let timeoutDetailsId

    document.querySelectorAll("#main-menu-mobile details").forEach(details => {
        // if mouse enter reset the timeout
        details.addEventListener("mouseenter", event => {
            clearTimeout(timeoutDetailsId)
        })

        details.addEventListener("mouseleave", event => {
            timeoutDetailsId = setTimeout(() => {
                event.target.removeAttribute("open")
            }, 3000)
        })
    })
})
</script>

<style scoped>

</style>
