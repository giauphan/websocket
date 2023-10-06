<template>
  <li class="relative" @click="toggleDropdown">
    <a
      id="navbarDropdown"
      class="text-gray-600 hover:text-gray-900 cursor-pointer"
      role="button"
    >
      {{ user.name }}
    </a>

    <div
      v-if="isDropdownOpen"
      class="absolute right-0 mt-2 bg-white border border-gray-200 rounded-lg shadow-md"
    >
      <a
        class="block px-4 py-2 text-gray-700 hover:bg-gray-100 cursor-pointer"
        href="#"
        @click.prevent="logout"
      >
        {{ __('Logout') }}
      </a>
    </div>
  </li>
</template>

<script>
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
};
</script>
