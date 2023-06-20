<template>
<footer class="footer p-5">
    <div>
        <h1 class=" text-primary text-2xl ">
            <Link href="/" :preserve-scroll="true">
                StorkMentors
            </Link>
        </h1>
    </div>

    <div>
        <span class="footer-title">Services</span>
        <a class="link link-hover">Branding</a>
        <a class="link link-hover">Design</a>
        <a class="link link-hover">Marketing</a>
        <a class="link link-hover">Advertisement</a>
    </div>

    <div>
        <span class="footer-title">Company</span>
        <a class="link link-hover">About us</a>
        <a class="link link-hover">Contact</a>
        <a class="link link-hover">Jobs</a>
        <a class="link link-hover">Press kit</a>
    </div>

    <div>
        <span class="footer-title">Legal</span>
        <a class="link link-hover">Terms of use</a>
        <a class="link link-hover">Privacy policy</a>
        <a class="link link-hover">Cookie policy</a>
    </div>
</footer>
</template>

<script setup>
import { Link } from "@inertiajs/inertia-vue3"

</script>

<style></style>
