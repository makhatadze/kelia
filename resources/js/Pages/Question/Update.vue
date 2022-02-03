<template>
    <app-layout title="Content Image Create">
        <form @submit.prevent="createContentImage">
            <div class="px-4 py-5 bg-white sm:p-6 shadow"
                 :class="'sm:rounded-tl-md sm:rounded-tr-md'">
                <div class="mb-4">
                    <jet-label for="parent" value="Previous Answers"/>
                    <t-input-multi-select
                        :options="answers"
                        v-model="form.previous_answers"
                        options-value-key="id"
                        options-label-key="body"
                    />
                    <jet-input-error :message="form.errors.answer_id" class="mt-2"/>
                </div>
                <div class="grid w-full grid-flow-row gap-4 xl:gap-24 mb-4 grid-cols-1 md:grid-cols-1 lg:grid-cols-3 xl:grid-cols-3 justify-items-stretch">
                    <div class="lg:col-span-1 xl:col-span-1 flex flex-col gap-6">
                        <div class="col-span-6 sm:col-span-4">
                            <jet-label for="tag" value="Type"/>
                            <t-input-select :options="types" v-model="form.type"/>
                            <jet-input-error :message="form.errors.type" class="mt-2"/>
                        </div>
                        <div>
                            <jet-label for="body" value="Body"/>
                            <t-input-text
                                id="body"
                                v-model="form.body"
                                type="text"
                            />
                            <jet-input-error :message="form.errors.body" class="mt-2"/>
                        </div>
                        <div>
                            <jet-label for="parent" value="Category Section"/>
                            <t-input-select :options="questionSections" v-model="form.section_id"/>
                            <jet-input-error :message="form.errors.section_id" class="mt-2"/>
                        </div>
                        <div>
                            <jet-label for="body" value="Description"/>
                            <t-input-text
                                id="description"
                                v-model="form.description"
                                type="text"
                            />
                            <jet-input-error :message="form.errors.name" class="mt-2"/>
                        </div>
                        <div>
                            <jet-label for="image" value="Image"/>
                            <t-input-file style="max-height: 320px; max-width: 420px" :default-value="item.image_src" model-name="question" v-model="form.image"/>
                            <jet-input-error :message="form.errors.image" class="mt-2"/>
                        </div>
                    </div>
                    <div class="lg:col-span-2 xl:col-span-2">
                        <t-button  @click.prevent="addAnswerItem()" color="blue mb-6" design="light" border>+ Add New Item</t-button>

                        <div class="flex flex-row gap-6 mb-6" v-for="(item, index) in form.answerItems" :key="`packetItem-${index}`">
                            <div>
                                <t-button @click.prevent="removeAnswerItem(index)" :radius="8" design="link-plus" color="red mt-5">
                                    <svg
                                        class="w-6 h-6"
                                        fill="none"
                                        stroke="currentColor"
                                        viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                        />
                                    </svg>
                                </t-button>

                            </div>
                            <div class="w-1/2">
                                <jet-label for="name" value="Body"/>
                                <t-input-text
                                    id="name"
                                    v-model="item.body"
                                    type="text"
                                />
                                <jet-input-error :message="form.errors[`answerItems.${index}.body`]" class="mt-2"/>
                            </div>
                            <div>
                                <jet-label for="image" value="Image"/>
                                <t-input-file style="max-height: 40px; max-width: 120px" :default-value="item?.image_src" model-name="answer" v-model="item.image"/>
                                <jet-input-error :message="form.errors[`answerItems.${index}.image`]" class="mt-2"/>
                            </div>
                            <div>
                                <jet-label for="name" value="Price"/>
                                <t-input-text
                                    id="price"
                                    v-model="item.price"
                                    type="number"
                                />
                                <jet-input-error :message="form.errors[`answerItems.${index}.price`]" class="mt-2"/>
                            </div>
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
import TInputFile from "@/Components/Form/Inputs/TInputFile";
import TInputText from "@/Components/Form/Inputs/TInputText";
import TButton from "@/Components/Button/TButton";
import TInputSelect from "@/Components/Form/Inputs/TInputSelect";
import TInputMultiSelect from "@/Components/Form/Inputs/TInputMultiSelect";

export default defineComponent({
    components: {
        AppLayout,
        JetActionMessage,
        JetButton,
        JetInputError,
        JetLabel,
        TInputFile,
        TInputText,
        TButton,
        TInputSelect,
        TInputMultiSelect
    },
    props: {
        item: {
            type: Object,
            default() {
                return {}
            }
        },
        questionSections: {
            type: Array,
            default() {
                return []
            }
        },
        types: {
            type: Array,
            default() {
                return []
            }
        },
        answers: {
            type: Array,
            default() {
                return []
            }
        }
    },
    data() {
        return {
            form: this.$inertia.form({
                _method: 'PUT',
                body: this.item.body,
                type: this.item?.type ? parseInt(this.item.type) : 1,
                section_id: this.item?.section_id ? parseInt(this.item.section_id) : null,
                previous_answers: this.item?.previous_answers_ids ?? [],
                description: this.item.description,
                image: this.item?.image_id,
                answerItems: this.item.answers.length ? this.item.answers.map((el) => {
                    return {
                        id: el.id,
                        body: el.body,
                        image: el?.image_id,
                        price: el.price,
                        image_src: el.image_src
                    }
                    }) : [
                        {
                            body: '',
                            image: null,
                            price: 0,
                        }
                    ]
            }),
        }
    },
    methods: {
        createContentImage() {
            this.form.post(route('question.update',this.item.id), {
                preserveScroll: true,
                forceFormData: true,
            });
        },
        addAnswerItem() {
            this.form.answerItems.push({
                body: '',
                image: null,
                price: 0
            })
        },
        removeAnswerItem(index) {
            if (this.form.answerItems.length > 1){
                this.form.answerItems.splice(index,1)
            }
        }
    },
})
</script>
