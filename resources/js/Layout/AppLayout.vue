<script setup>
import Navbar from "../Components/Navbar.vue";
</script>
<template>

    <Navbar/>

        <main class="py-4">
           <!-- 1 reference  -->

           <slot />
           
        </main>
        
</template>