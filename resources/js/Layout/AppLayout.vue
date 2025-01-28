<script setup>
import {onMounted, reactive} from "vue";
import * as bootstrap from "bootstrap";
import {router, usePage} from "@inertiajs/vue3";
import Navbar from "../Components/Navbar.vue";
import Toast from "../Components/Toast.vue";

const state = reactive({
    toastRef:null,
    toastMessage:""
})

onMounted(() => {
    state.toastRef = new bootstrap.Toast('#app-toast',{
        delay:3000
    })
})

const page = usePage();
router.on('finish',() => {
    state.toastMessage = page.props.toast.success;
    showToast();
});
const showToast = () => state.toastRef.show();

</script>

<template>

    <Navbar/>
    
    <main class="py-4">
        <!-- 1 reference  -->

        <slot />
        
    </main>
    <Toast id="app-toast" :message="state.toastMessage" />
</template>