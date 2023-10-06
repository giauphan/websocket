<template>
  <div class="input-group flex ">
    <input id="btn-input" type="text" name="message" class="form-input py-1 px-2 text-sm w-full"
      placeholder="Type your message here..." v-model="newMessage" @keyup.enter="sendMessage" />
    <span class="input-group-btn">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-1 px-2 rounded" id="btn-chat"
        @click="sendMessage">
        Send
      </button>
    </span>
  </div>
</template>

<script>
export default {
  // Takes the "user" props from <chat-form> … :user="{{ Auth::user() }}"></chat-form> in the parent chat.blade.php.
  props: ["user"],
  data() {
    return {
      newMessage: "",
    };
  },
  methods: {
    sendMessage() {
      // Emit a "messagesent" event including the user who sent the message along with the message content
      this.$emit("messagesent", {
        user: this.user,
        // newMessage is bound to the earlier "btn-input" input field
        message: this.newMessage,
      });
      // Clear the input
      this.newMessage = "";
    },
  },
};
</script>
