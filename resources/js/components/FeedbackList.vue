<template>
    <div v-if="feedbacks">
    <div v-for="feedback in feedbacks.data" :key="feedback.id" class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
        <div class="grid grid-cols-1 md:grid-cols-1">
            <div style="padding: 30px;" class="p-5">
                <div class="flex items-center">
                    <div class="text-lg leading-7 font-semibold"><p class="underline text-gray-900 dark:text-white">{{ feedback.title }}</p></div>
                </div>

                <div class="">
                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                        {{ feedback.description }}
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-700 sm:text-left">
                        <div class="flex items-center">
                            <div class="">
                                <span class="font-semibold">
                                    Category
                                </span>
                                <span  class="ml-1 rounded-lg px-2 text-gray-500 ">
                                    {{ feedback.category }}
                                </span>
                            </div>
                            <div class="ml-12">
                                <span class="font-semibold">
                                    Created by:
                                </span>
                                <span  class="ml-1 text-gray-500 rounded-lg px-2">
                                    {{ feedback.user.name }}
                                </span>
                            </div>
                        </div>

                        <div class="mt-2">
                            <button @click="handleReply(feedback.id)" class="text-gray-700 font-semibold underline">Reply</button>
                        </div>

                        <!-- response form -->
                        <form v-if="showResponseForm[feedback.id]" @submit.prevent="submitResponse(feedback.id)">
                            <textarea v-model="responseText" rows="4" cols="50" placeholder="Enter your response"></textarea>
                            <button type="submit">Submit</button>
                            <button type="button" @click="cancelResponse(feedback.id)">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</template>
<script>
import { reactive } from 'vue';
import { ref } from 'vue';
import axios from 'axios';

export default {
    props: ['feedbacks', 'auth'],
    setup (props) {
        const showResponseForm = reactive({});
        const state = reactive({
            responseText: ''
        });

        // const toggleResponseForm = (feedbackId) => {
        //     showResponseForm.value[feedbackId] = !showResponseForm.value[feedbackId];
        // };


        // console.log(props.feedbacks)
        // const parsedFeedbacks = JSON.parse(props.feedbacks);

        // parsedFeedbacks.forEach(feedback => {
        //     showResponseForm[feedback.id] = false;
        // });

        if (props.feedbacks && Array.isArray(props.feedbacks.data)) {
            props.feedbacks.data.forEach(feedback => {
                showResponseForm[feedback.id] = false;
            });
        }

        const submitResponse = async (feedbackId) => {
            console.log('Feedback ID:', feedbackId, state);

            const response = await axios.post(`/feedbacks/${feedbackId}/responses`, {
                text: state.responseText.value
            });


            // handle response here

            // hide form
            showResponseForm[feedbackId] = false;

            // clear text input
            state.responseText = '';
        };

        // close form
        const cancelResponse = (feedbackId) => {
            showResponseForm[feedbackId] = false;
            state.responseText = '';
        }

        const handleReply = (feedbackId) => {
            if (props.auth) {
                showResponseForm[feedbackId] = !showResponseForm[feedbackId];
            } else {
                // Redirect to the login page
                window.location.href = "redirect link todo";
            }
        };
        return {
            // toggleResponseForm,
            handleReply,
            showResponseForm,
            submitResponse,
            cancelResponse,
            state
        };
    },
    methods: {
    },
}
</script>
