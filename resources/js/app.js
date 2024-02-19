import './bootstrap';

import { createApp } from 'vue';
import FeedbackList from './components/FeedbackList.vue';

const app = createApp({})
app.component('feedback-list', FeedbackList)
app.mount('#app')

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
