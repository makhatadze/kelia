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
                            <t-input-file :default-value="item.image_bg_src" model-name="service-item-bg" v-model="form.imageBg" />
                            <jet-input-error :message="form.errors.imageBg" class="mt-2"/>
                        </div>
                    </div>
                    <t-tab :data="tab2content" v-model="tab2">
                        <template #content="{props}">
                            <div v-if="props.id === 1">
                                <quill-editor
                                    ref="editor"
                                    :value="content_1"
                                    theme="snow"
                                    @change="onBodyHeadChange($event)"
                                    :options="editorOption"
                                />
                                <jet-input-error :message="form.errors.body_text_head" class="mt-2"/>
                            </div>
                            <div v-if="props.id === 2">
                                <quill-editor
                                    ref="editor2"
                                    :value="content_2"
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
                            <t-input-file style="max-height: 320px; max-width: 420px" :default-value="item.image_first_src" model-name="service-item-first" v-model="form.imageFirst" />
                            <jet-input-error :message="form.errors.imageFirst" class="mt-2"/>
                        </div>
                    </div>
                    <div class="flex items-center justify-center">
                        <div class="col-span-6 sm:col-span-4">
                            <jet-label for="img_path" value="Second Image"/>
                            <t-input-file style="max-height: 320px; max-width: 420px" :default-value="item.image_second_src" model-name="service-item-second" v-model="form.imageSecond" />
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
import '@morioh/v-quill-editor/dist/editor.css';
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
                body_text_head_delta: this.item.body_text_head_delta,
                imageBg: this.item?.image_bg_id,
                imageFirst: this.item?.image_first_id,
                imageSecond: this.item?.image_second_id,
                body_text_bottom: this.item.body_text_bottom,
                body_text_bottom_delta: this.item.body_text_bottom,
            }),
            editor: ClassicEditor,
            editorConfigData: {},
            tab2: 1,
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
            content_1: this.item.body_text_head ? this.item.body_text_head.substring(1, this.item.body_text_head.length - 1) : '',
            content_2: this.item.body_text_bottom ? this.item.body_text_bottom.substring(1, this.item.body_text_bottom.length - 1) : '',
            editorOption: {
                debug: 'info',
                placeholder: 'Compose an epic...',
                theme: 'snow'
            }
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
