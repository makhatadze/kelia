<template>
    <app-layout title="Service Item Create">
        <form @submit.prevent="submitForm">
            <div class="px-4 py-5 bg-white sm:p-6 shadow"
                 :class="'sm:rounded-tl-md sm:rounded-tr-md'">
                <div class="grid w-full grid-flow-row gap-4 mb-4 grid-cols-1 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-2 justify-items-stretch">
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
                        <t-input-file :default-value="item?.image_bg_src" model-name="service-item-bg" v-model="form.imageBg" />
                        <jet-input-error :message="form.errors.imageBg" class="mt-2"/>
                    </div>
                    <div class="col-span-6">
                        <jet-label for="body_text_head" value="Body text head"/>
                        <ckeditor :editor="editor"
                                  :config="editorConfigData"
                                  @ready="meyCustomUploadAdapterPlugin($event)"
                                  v-model="form.body_text_head"></ckeditor>
                        <jet-input-error :message="form.errors.body_text_head" class="mt-2"/>
                    </div>
                    <div class="col-span-6 sm:col-span-4">
                        <jet-label for="img_path" value="First Image"/>
                        <t-input-file :default-value="item?.image_first_src" model-name="service-item-first" v-model="form.imageFirst" />
                        <jet-input-error :message="form.errors.imageFirst" class="mt-2"/>
                    </div>
                    <div class="col-span-6 sm:col-span-4">
                        <jet-label for="img_path" value="Second Image"/>
                        <t-input-file :default-value="item?.image_second_src" model-name="service-item-second" v-model="form.imageSecond" />
                        <jet-input-error :message="form.errors.imageSecond" class="mt-2"/>
                    </div>
                    <div class="col-span-6">
                        <jet-label for="body_text_head" value="Body text bottom"/>
                        <ckeditor :editor="editor"
                                  :config="editorConfigData"
                                  @ready="meyCustomUploadAdapterPlugin($event)"
                                  v-model="form.body_text_bottom"></ckeditor>
                        <jet-input-error :message="form.errors.body_text_bottom" class="mt-2"/>
                    </div>

                </div>
            </div>
            <div
                class="flex items-center justify-start px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                <jet-action-message :on="form.recentlySuccessful" class="mr-3">
                    Saved.
                </jet-action-message>

                <jet-button :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Save
                </jet-button>
            </div>
        </form>
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
import '@morioh/v-quill-editor/dist/editor.css';
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';
import MyUploadAdapter from "@/mixins/EditorCustomUpload";

export default defineComponent({
    components: {
        AppLayout,
        JetActionMessage,
        JetButton,
        JetInputError,
        JetLabel,
        TInputText,
        TInputFile,
    },
    props: {
        service: {
            type: Object,
            default() {
                return null
            }
        },
        item: {
            type: Object,
            default() {
                return {}
            }
        },
    },
    data() {
        return {
            form: this.$inertia.form({
                _method: 'PUT',
                title: this.item.title,
                head_title: this.item.head_title,
                sub_text: this.item.sub_text,
                body_text_head: this.item.body_text_head,
                imageBg: this.item?.image_bg_id,
                imageFirst: this.item?.image_first_id,
                imageSecond: this.item?.image_second_id,
                body_text_bottom: this.item.body_text_bottom
            }),
            editor: ClassicEditor,
            editorConfigData: {}
        }
    },
    methods: {
        submitForm() {
            this.form.post(route('service-item.update',[this.service.id, this.item.id]), {
                preserveScroll: true,
                forceFormData: true,
            });
        },
        meyCustomUploadAdapterPlugin(editor) {
            editor.plugins.get('FileRepository').createUploadAdapter = (loader) => {
                return new MyUploadAdapter(loader);
            };
        },
    },
})
</script>
