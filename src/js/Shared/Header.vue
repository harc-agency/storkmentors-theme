<template>
  <header class="navbar bg-secondary text-white">
    <div>
      <div class="navbar-start">
        <div class="dropdown">
          <label tabindex="0" class="btn btn-ghost text-white lg:hidden">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-5 w-5"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M4 6h16M4 12h8m-8 6h16"
              />
            </svg>
          </label>
          <ul
            tabindex="0"
            class="menu menu-sm dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52"
          >
            <li>
              <Link href="/">
                <h1>{{ props.site.name }}</h1>
              </Link>
            </li>
            <li>
              <Link style="margin-left: 1rem" href="/sample-page">Sample Page</Link>
            </li>
            <li>
              <Link href="/this-page-does-not-exist">404 Page</Link>
            </li>
            <li>
              <a>Parent</a>
              <ul class="p-2">
                <li>
                  <a>Submenu 1</a>
                </li>
                <li>
                  <a>Submenu 2</a>
                </li>
              </ul>
            </li>
            <li>
              <a>Item 3</a>
            </li>
          </ul>
        </div>
      </div>
      <Link href="/">
        <h1>{{ props.site.name }}</h1>
      </Link>
    </div>
    <div class="navbar-center hidden lg:flex">
      <div class="flex items-stretch">
        <Link class="btn btn-ghost btn-sm rounded-btn" href="#">why storkmentors</Link>
        <Link class="btn btn-ghost btn-sm rounded-btn" href="#">career transition</Link>
        <Link class="btn btn-ghost btn-sm rounded-btn" href="#">life transition</Link>
        <Link class="btn btn-ghost btn-sm rounded-btn" href="#">mentors</Link>
        <Link class="btn btn-ghost btn-sm rounded-btn" href="#">stories</Link>
        <Link class="btn btn-ghost btn-sm rounded-btn" href="#">downloads</Link>
      </div>
    </div>
    <div class="navbar-end">
      <a class="btn">Button</a>
    </div>
  </header>
  <!-- <Link class="link link-hover" href="#">why storkmentors</Link>
    <Link class="link link-hover" href="#">career transition</Link>
    <Link class="link link-hover" href="#">life transition</Link>
    <Link class="link link-hover" href="#">mentors</Link>
    <Link class="link link-hover" href="#">stories</Link>
    <Link class="link link-hover" href="#">downloads</Link>
  <Link class="link link-hover" href="#">dashboard</Link>-->
</template>

<script setup>
import { Link, usePage } from "@inertiajs/inertia-vue3";

const { props } = usePage();
</script>

<style></style>
