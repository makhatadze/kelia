<template>
    <app-layout title="Content Image Create">
        <jet-form-section @submitted="submitForm">
            <template #title>
                Content Text
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
                <div class="col-span-6 sm:col-span-4">
                    <jet-label for="tag" value="Section"/>
                    <t-input-select :options="sections" v-model="form.section"/>
                    <jet-input-error :message="form.errors.section" class="mt-2"/>
                </div>

                <div class="col-span-6 sm:col-span-4">
                    <jet-label for="tag" value="Tag"/>
                    <t-input-select :options="tags" v-model="form.tag"/>
                    <jet-input-error :message="form.errors.tag" class="mt-2"/>
                </div>
                <div class="col-span-6 sm:col-span-4">
                    <jet-label for="tag" value="Text Type"/>
                    <t-input-select :options="textTypes" v-model="form.text_type"/>
                    <jet-input-error :message="form.errors.text_type" class="mt-2"/>
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
        tags: {
            type: Array,
            default() {
                return []
            }
        },
        sections: {
            type: Array,
            default() {
                return []
            }
        },
        textTypes: {
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
                title: '',
                tag: 10,
                section: 1000,
                text_type: 1,
            }),
        }
    },
    methods: {
        submitForm() {
            this.form.post(route('content-text.store'), {
                preserveScroll: true,
                forceFormData: true,
                onSuccess: () => (this.form.reset()),
            });
        },
    },
})
</script>
