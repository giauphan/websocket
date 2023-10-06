<script setup>
import { Dropdown, ListGroup} from 'flowbite-vue'
</script>
<template>
  <dropdown :text="name" placement="bottom">
    <list-group>
      <slot></slot>
      
    </list-group>
  </dropdown>
</template>
<script>
export default {
  props:['name'],
  mounted() {
    console.log('Component mounted.')
  }
}
</script>
