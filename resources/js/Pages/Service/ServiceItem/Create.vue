<template>
    <app-layout title="Service Item Create">
        <form @submit.prevent="submitForm">
            <div class="px-4 py-5 bg-white sm:p-6 shadow"
                 :class="'sm:rounded-tl-md sm:rounded-tr-md'">
                <div class="grid w-full grid-flow-row gap-4 xl:gap-24 mb-4 grid-cols-1 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-2 justify-items-stretch">
                    <div class="flex flex-col gap-4">
                        <div class="">
                            <jet-label for="head_title" value="Head Title"/>
                            <t-input-text
                                id="headTitle"
                                v-model="form.head_title"
                                type="text"
                            />
                            <jet-input-error :message="form.errors.head_title" class="mt-2"/>
                        </div>
                        <div class="">
                            <jet-label for="title" value="Title"/>
                            <t-input-text
                                id="title"
                                v-model="form.title"
                                type="text"
                            />
                            <jet-input-error :message="form.errors.title" class="mt-2"/>
                        </div>
                        <div class="">
                            <jet-label for="head_title" value="Sub Text"/>
                            <t-input-text
                                id="headTitle"
                                v-model="form.sub_text"
                                type="text"
                            />
                            <jet-input-error :message="form.errors.sub_text" class="mt-2"/>
                        </div>
                        <div class="">
                            <jet-label for="img_path" value="Background Image"/>
                            <t-input-file default-value="" model-name="service-item-bg" v-model="form.imageBg" />
                            <jet-input-error :message="form.errors.imageBg" class="mt-2"/>
                        </div>
                    </div>
                    <t-tab :data="tab2content" v-model="tab2">
                        <template #content="{props}">
                            <div v-if="props.id === 1">
                                <quill-editor
                                    ref="editor"
                                    content-type="delta"
                                    v-model:value="content_1"
                                    @change="onBodyHeadChange($event)"
                                    :options="editorOption"
                                />
                                <jet-input-error :message="form.errors.body_text_head" class="mt-2"/>
                            </div>
                            <div v-if="props.id === 2">
                                <quill-editor
                                    v-model:value="form.content_2"
                                    :options="editorOption"
                                    content-type="delta"
                                    @change="onBodyBottomChange($event)"
                                />
                                <jet-input-error :message="form.errors.body_text_bottom" class="mt-2"/>
                            </div>
                        </template>
                    </t-tab>
                    <div class="flex items-center justify-center">
                        <div class="col-span-6 sm:col-span-4">
                            <jet-label for="img_path" value="First Image"/>
                            <t-input-file style="max-height: 320px; max-width: 420px" default-value="" model-name="service-item-first" v-model="form.imageFirst" />
                            <jet-input-error :message="form.errors.imageFirst" class="mt-2"/>
                        </div>
                    </div>
                    <div class="flex items-center justify-center">
                        <div class="col-span-6 sm:col-span-4">
                            <jet-label for="img_path" value="Second Image"/>
                            <t-input-file style="max-height: 320px; max-width: 420px" default-value="" model-name="service-item-second" v-model="form.imageSecond" />
                            <jet-input-error :message="form.errors.imageSecond" class="mt-2"/>
                        </div>
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
import JetInputError from '@/Jetstream/InputError.vue'
import JetLabel from '@/Jetstream/Label.vue'
import JetActionMessage from '@/Jetstream/ActionMessage.vue'
import AppLayout from "@/Layouts/AppLayout";
import TInputText from "@/Components/Form/Inputs/TInputText";
import TInputFile from "@/Components/Form/Inputs/TInputFile";
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';
import MyUploadAdapter from "@/mixins/EditorCustomUpload";
import TTab from "@/Components/Tab/TTab";
import { quillEditor } from 'vue3-quill'

export default defineComponent({
    components: {
        AppLayout,
        JetActionMessage,
        JetButton,
        JetInputError,
        JetLabel,
        TInputText,
        TInputFile,
        TTab,
        quillEditor
    },
    props: {
        service: {
            type: Object,
            default() {
                return null
            }
        },
    },
    data() {
        return {
            form: this.$inertia.form({
                _method: 'POST',
                title: '',
                head_title: '',
                sub_text: '',
                body_text_head: '',
                body_text_head_delta: '',
                delta: null,
                imageBg: '',
                imageFirst: '',
                imageSecond: '',
                body_text_bottom: '',
                body_text_bottom_delta: ''
            }),
            editor: ClassicEditor,
            editorConfigData: {},
            tab2: 1,
            content_1 : '',
            content_2: '',
            tab2content: [
                {
                    id: 1,
                    title: "Top",
                },
                {
                    id: 2,
                    title: "Bottom",
                },
            ],
            content: '<h2>I am Example</h2>',
            editorOption: {
                // Some Quill options...
            }
        }
    },
    methods: {
        submitForm() {
            this.form.post(route('service-item.store',this.service.id), {
                preserveScroll: true,
                forceFormData: true,
                onSuccess: () => (this.form.reset()),
            });
        },
        meyCustomUploadAdapterPlugin(editor) {
            editor.plugins.get('FileRepository').createUploadAdapter = (loader) => {
                return new MyUploadAdapter(loader);
            };
        },
        onBodyHeadChange({quill, html}) {
            this.form.body_text_head_delta = JSON.stringify(quill.getContents());
            this.form.body_text_head = JSON.stringify(html);
        },
        onBodyBottomChange({quill, html}) {
            this.form.body_text_bottom_delta = JSON.stringify(quill.getContents());
            this.form.body_text_bottom = JSON.stringify(html);
        }
    },
})
</script>
