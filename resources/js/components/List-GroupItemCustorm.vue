<template>
    <list-group-item>
        <a :href="href_item">
            <slot></slot>
        </a>
    </list-group-item>
</template>
  
<script setup>
import { ListGroupItem, A } from 'flowbite-vue';
</script>
  
<script>
export default {
    props: ['href_item'],
};
</script>