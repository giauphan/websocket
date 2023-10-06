<script setup>
import { Dropdown, ListGroup, ListGroupItem } from 'flowbite-vue'
</script>
<template>

  <dropdown text="Click me" placement="top">
    <list-group>
      <list-group-item>Item #1</list-group-item>
      <list-group-item>Item #2</list-group-item>
      <list-group-item>Item #3</list-group-item>
    </list-group>
  </dropdown>
</template>

<!-- <script>
export default {
  props: ["user"],
  data() {
    return {
      isDropdownOpen: false,
    };
  },
  methods: {
    toggleDropdown() {
      this.isDropdownOpen = !this.isDropdownOpen;
    },
    logout() {
      document.getElementById('logout-form').submit();
    },
  },
  mounted() {
    console.log("user", this.user);
  },
};
</script> -->
