<template>
    <app-layout title="Service Item Create">
        <jet-form-section @submitted="submitForm">
            <template #title>
                Service Item
            </template>
            <template #form>
                <div class="col-span-6 sm:col-span-4">
                    <jet-label for="head_title" value="Head Title"/>
                    <t-input-text
                        id="headTitle"
                        v-model="form.head_title"
                        type="text"
                    />
                    <jet-input-error :message="form.errors.head_title" class="mt-2"/>
                </div>
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
                    <jet-label for="head_title" value="Sub Text"/>
                    <t-input-text
                        id="headTitle"
                        v-model="form.sub_text"
                        type="text"
                    />
                    <jet-input-error :message="form.errors.sub_text" class="mt-2"/>
                </div>
                <div class="col-span-6 sm:col-span-4">
                    <jet-label for="img_path" value="Background Image"/>
                    <t-input-file default-value="" model-name="service-item-bg" v-model="form.imageBg" />
                    <jet-input-error :message="form.errors.imageBg" class="mt-2"/>
                </div>
                <div class="col-span-6 sm:col-span-4">
                    <jet-label for="body_text_head" value="Body text head"/>
                    <t-input-text
                        id="headTitle"
                        v-model="form.body_text_head"
                        type="text"
                    />
                    <jet-input-error :message="form.errors.body_text_head" class="mt-2"/>
                </div>
                <div class="col-span-6 sm:col-span-4">
                    <jet-label for="img_path" value="First Image"/>
                    <t-input-file default-value="" model-name="service-item-first" v-model="form.imageFirst" />
                    <jet-input-error :message="form.errors.imageFirst" class="mt-2"/>
                </div>
                <div class="col-span-6 sm:col-span-4">
                    <jet-label for="img_path" value="Second Image"/>
                    <t-input-file default-value="" model-name="service-item-second" v-model="form.imageSecond" />
                    <jet-input-error :message="form.errors.imageSecond" class="mt-2"/>
                </div>
                <div class="col-span-6 sm:col-span-4">
                    <jet-label for="body_text_head" value="Body text bottom"/>
                    <t-input-text
                        id="headTitle"
                        v-model="form.body_text_bottom"
                        type="text"
                    />
                    <jet-input-error :message="form.errors.body_text_bottom" class="mt-2"/>
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
import TInputFile from "@/Components/Form/Inputs/TInputFile";

export default defineComponent({
    components: {
        AppLayout,
        JetActionMessage,
        JetButton,
        JetFormSection,
        JetInputError,
        JetLabel,
        TInputText,
        TInputFile
    },
    data() {
        return {
            form: this.$inertia.form({
                _method: 'POST',
                title: '',
                head_title: '',
                sub_text: '',
                body_text_head: '',
                imageBg: '',
                imageFirst: '',
                imageSecond: '',
                body_text_bottom: ''
            }),
        }
    },
    methods: {
        submitForm() {
            this.form.post(route('service.store'), {
                preserveScroll: true,
                forceFormData: true,
                onSuccess: () => (this.form.reset('title')),
            });
        },
    },
})
</script>
