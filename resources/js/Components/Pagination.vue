<script setup>
import { Link } from "@inertiajs/vue3";
import { computed } from "vue";
const props = defineProps({
    meta:{
        type:Object,
        required:true
    },
    position:{
        type:String,
        default:'center'
    }
})
const classes = computed(()=>{
    return {
        'pagination pagination-sm' :true,
        'justify-content-center' : props.position=== 'center',
        'justify-content-start' : props.position=== 'left',
        'justify-content-end' : props.position=== 'right',
    }
    
})

</script>

<template>
     <nav class="mt-4" aria-label="Pagination">
        <ul :class="classes">
            <li class="page-item" 
                v-for="(Link, index) in meta.links"
                :key="index"
                :class="{active: Link.active, disabled:!Link.url}"
            >
                <Link class="page-link" :href="Link.url ?? '' " v-html="Link.label" preserve-scroll></Link>
            </li>
           
        </ul>
    </nav>
</template>