<template>
<div id="gazette-signup"
     v-html="shortcode" class="p-20">
</div>
</template>

<script setup>
import {
    defineProps,
    onMounted
} from "vue"

// take a prop of shortcode
defineProps({
    shortcode: {
        required: true
    }
})

onMounted(() => {

})

</script>

<style lang="scss" >
#gazette-signup{
    // input type="text"
    input[type="text"],
    input[type="email"]{
            border: 1px solid #808080;
            border-radius: 5px;
            padding: 10px;
            width: 100%;
            margin-bottom: 10px;
        }

}
</style>