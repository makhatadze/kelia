<template>
    <app-layout title="Content Image Create">
        <form @submit.prevent="createContentImage">
            <div class="px-4 py-5 bg-white sm:p-6 shadow"
                 :class="'sm:rounded-tl-md sm:rounded-tr-md'">
                <div class="grid w-full grid-flow-row gap-4 xl:gap-24 mb-4 grid-cols-1 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-2 justify-items-stretch">
                    <div class="flex flex-col gap-6">
                        <div>
                            <jet-label for="name" value="Name"/>
                            <t-input-text
                                id="name"
                                v-model="form.name"
                                type="text"
                            />
                            <jet-input-error :message="form.errors.name" class="mt-2"/>
                        </div>
                        <div>
                            <jet-label for="name" value="Sub Text"/>
                            <t-input-text
                                id="sub_text"
                                v-model="form.sub_text"
                                type="text"
                            />
                            <jet-input-error :message="form.errors.sub_text" class="mt-2"/>
                        </div>
                        <div>
                            <jet-label for="name" value="Mini Sub Text"/>
                            <t-input-text
                                id="mini_sub_text"
                                v-model="form.mini_sub_text"
                                type="text"
                            />
                            <jet-input-error :message="form.errors.mini_sub_text" class="mt-2"/>
                        </div>
                        <div>
                            <jet-label for="image" value="Image"/>
                            <t-input-file model-name="packet" :default-value="item?.image_src" v-model="form.image" />
                            <jet-input-error :message="form.errors.image" class="mt-2"/>
                        </div>
                    </div>
                    <div class="">
                        <t-button  @click.prevent="addPacketItem()" color="blue mb-6" design="light" border>+ Add New Item</t-button>

                        <div class="flex flex-row gap-6 mb-6" v-for="(item, index) in form.packetItems" :key="`packetItem-${index}`">
                            <div>
                                <t-button @click.prevent="removePacketItem(index)" :radius="8" design="link-plus" color="red mt-5">
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
                            <div>
                                <jet-label for="name" value="Name"/>
                                <t-input-text
                                    id="name"
                                    v-model="item.text"
                                    type="text"
                                />
                                <jet-input-error :message="form.errors[`packetItems.${index}.text`]" class="mt-2"/>
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

export default defineComponent({
    components: {
        AppLayout,
        JetActionMessage,
        JetButton,
        JetInputError,
        JetLabel,
        TInputFile,
        TInputText,
        TButton
    },
    props: {
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
                name: this.item.name,
                sub_text: this.item.sub_text,
                mini_sub_text: this.item.mini_sub_text,
                image: this.item?.image_id,
                packetItems: this.item.items.length ? this.item.items.map((el) => {
                    return {
                        text: el.text
                    }
                }) : [
                    {
                        text: ''
                    }
                ]
            }),
        }
    },
    methods: {
        createContentImage() {
            this.form.post(route('packet.update',this.item.id), {
                preserveScroll: true,
                forceFormData: true,
            });
        },
        addPacketItem() {
            this.form.packetItems.push({text: ''})
        },
        removePacketItem(index) {
            if (this.form.packetItems.length > 1){
                this.form.packetItems.splice(index,1)
            }
        }
    },
})
</script>
