<script setup>
import Answer from './Answer.vue';

defineProps({
    answers: {
        type: Object,
        required: true
    }
})
</script>

<template>
    <h2 class="mt-4 answer-header"> {{ answers.meta.total }} Answers</h2>
    <div class="answer-content mt-4">
        
        <Answer 
            v-for="answer in answers.data" 
            :key="answer.id" 
            :answer="answer" 
           
        />
       
    </div>
</template>