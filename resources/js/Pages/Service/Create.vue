<template>
    <app-layout title="Service Create">
        <jet-form-section @submitted="submitForm">
            <template #title>
                Service
            </template>
            <template #form>
                <div class="col-span-6 sm:col-span-4">
                    <jet-label for="title" value="Title"/>
                    <t-input-text
                        id="title"
                        v-model="form.title"
                        type="text"
                    />
                    <jet-input-error :message="form.errors.title" class="mt-2"/>
                </div>
            </template>

            <template #actions>
                <jet-action-message :on="form.recentlySuccessful" class="mr-3">
                    Saved.
                </jet-action-message>

                <jet-button :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Save
                </jet-button>
            </template>
        </jet-form-section>
    </app-layout>
</template>

<script>
import {defineComponent} from 'vue'
import JetButton from '@/Jetstream/Button.vue'
import JetFormSection from '@/Jetstream/FormSection.vue'
import JetInputError from '@/Jetstream/InputError.vue'
import JetLabel from '@/Jetstream/Label.vue'
import JetActionMessage from '@/Jetstream/ActionMessage.vue'
import AppLayout from "@/Layouts/AppLayout";
import TInputText from "@/Components/Form/Inputs/TInputText";

export default defineComponent({
    components: {
        AppLayout,
        JetActionMessage,
        JetButton,
        JetFormSection,
        JetInputError,
        JetLabel,
        TInputText
    },
    data() {
        return {
            form: this.$inertia.form({
                _method: 'POST',
                title: '',
            }),
        }
    },
    methods: {
        submitForm() {
            this.form.post(route('service.store'), {
                preserveScroll: true,
                forceFormData: true,
                onSuccess: () => (this.form.reset()),
            });
        },
    },
})
</script>
