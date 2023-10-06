import { createApp } from 'vue';
import axios from 'axios';
import '../css/app.css';
import './bootstrap';

import ExampleComponent from './components/ExampleComponent.vue';
import ChatMessages from './components/ChatMessages.vue';
import ChatForm from './components/ChatForm.vue';
import dropDown from './components/dropDown.vue';
const app = createApp({
  data() {
    return {
      messages: []
    };
  },
  async created() {
    await this.fetchMessages();
  },
  methods: {
    async fetchMessages() {
      try {
        const response = await axios.get('/messages');
        this.messages = response.data;
      } catch (error) {
        console.error(error);
      }
    },
    async addMessage(message) {
      // this.messages.push(message);
      try {
        const response = await axios.post('/messages', message);
        console.log(response.data);
      } catch (error) {
        console.error(error);
      }
    }
  }
});


app.component('example-component', ExampleComponent);
app.component('chat-messages', ChatMessages);
app.component('chat-form', ChatForm);
app.component('Drop-Down', dropDown);

app.mount('#app');
