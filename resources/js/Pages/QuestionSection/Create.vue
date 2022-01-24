<template>
    <app-layout title="Question Section Create">
        <jet-form-section @submitted="submitForm">
            <template #title>
                Question Section
            </template>
            <template #form>
                <div class="col-span-6 sm:col-span-4">
                    <jet-label for="body" value="Body"/>
                    <t-input-text
                        id="title"
                        v-model="form.body"
                        type="text"
                    />
                    <jet-input-error :message="form.errors.body" class="mt-2"/>
                </div>
                <div class="col-span-6 sm:col-span-4">
                    <jet-label for="parent" value="Parent"/>
                    <t-input-select :options="questionSections" v-model="form.section_id"/>
                    <jet-input-error :message="form.errors.section_id" class="mt-2"/>
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
import TInputSelect from "@/Components/Form/Inputs/TInputSelect";
import TInputText from "@/Components/Form/Inputs/TInputText";

export default defineComponent({
    components: {
        AppLayout,
        JetActionMessage,
        JetButton,
        JetFormSection,
        JetInputError,
        JetLabel,
        TInputSelect,
        TInputText
    },
    props: {
        questionSections: {
            type: Array,
            default() {
                return []
            }
        },
    },
    data() {
        return {
            form: this.$inertia.form({
                _method: 'POST',
                body: '',
                section_id: null
            }),
        }
    },
    methods: {
        submitForm() {
            this.form.post(route('question-section.store'), {
                preserveScroll: true,
                forceFormData: true,
                onSuccess: () => (this.form.reset('section_id','body')),
            });
        },
    },
})
</script>
