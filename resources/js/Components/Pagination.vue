<script setup>
import { Link } from '@inertiajs/vue3';

const props = defineProps({
  links: Array,
});
</script>
<template>
  <div class="mt-6">
    <Link
            :is="link.url ? 'Link' : 'span'"
            v-for="link in links" 
            :href="link.url" 
            v-html="link.label"
            class="px-2 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
            :class="{'px-2 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white' : ! link.url, 'font-extrabold px-2 py-2 leading-tight text-gray-900 bg-gray-300 border border-gray-200 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white' : link.active }"
            
        />
  </div>                          
</template>