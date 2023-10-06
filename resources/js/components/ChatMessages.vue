<template>
  <ul class="chat overflow-scroll h-64">
    <li class="left clearfix" v-for="message in reversedMessages" :key="message.id">
      <div class="clearfix">
        <div class="header">
          <strong class="font-bold">
            {{ message.user.name }}
          </strong>
        </div>
        <p class="mt-2">
          {{ message.message }}
        </p>
      </div>
    </li>
  </ul>
</template>
  
<script>
export default {
  props: ["messages"],
 
  mounted() {
    window.Echo.channel('room.1')
      .listen('MessageSent', (data) => {
        console.log(this.messages)
        console.log(data.message.message, data.user.name)
        this.messages.push({
          user: data.user,
          message: data.message.message,
        });
      })
  },
  computed: {
    reversedMessages() {
      return this.messages.slice().reverse();
    },
  },
};
</script>
  