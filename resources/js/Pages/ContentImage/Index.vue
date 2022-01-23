<template>
    <app-layout title="Content Image">
        <template #header>Content Images</template>

        <t-back-end-table
            @selectedItem="selectedItem = $event.data; actionClick($event.data, $event.action)"
            :content="contentImages"
            :header="header"
            content-key="contentImages"
            unique-id="id"
            search-route="content-image.index"
        >
            <template #top-right>
                <Link :href="route('content-image.create')">
                    <t-button color="green" design="light" border>+ Add New</t-button>
                </Link>
            </template>
            <template #tag="{props}">
                {{ tags.find(t => t.key === Number(props.tag)).label }}
            </template>
            <template #section="{props}">
                {{ sections.find(t => t.key === Number(props.section)).label }}
            </template>
            <template #image_src="{props}">
                <img :src="props.image_src" alt="" class="w-8 h-8 rounded-full">
            </template>
        </t-back-end-table>
        <t-modal v-model="showModal">
            <template #header>
                Content Image Deleting
            </template>
            <template #content>
                <span v-html="modalContent"></span>
            </template>
            <template #footer-left>
                <t-button
                    design="light"
                    color="green"
                    @click="showModal = false"
                >
                    No, Nevermind
                </t-button>
            </template>
            <template #footer-right>
                <form id="delete" @submit.prevent="deleteItem">

                    <t-button
                        design="light"
                        color="gray"
                        type="submit">
                        Yes, Delete
                    </t-button>
                </form>
            </template>
        </t-modal>
    </app-layout>
</template>

<script>
/*Main functions*/
import {settingsMenuMixin} from "@/Mixins/settingsMenuMixin";
import {reactive, ref, toRefs, watch} from "vue";
import {useForm} from "@inertiajs/inertia-vue3";
import { Link } from '@inertiajs/inertia-vue3';

/*Components*/
import AppLayout from "@/Layouts/AppLayout";
import TButton from "@/Components/Button/TButton";
import TModal from "@/Components/Modal/TModal";
import TBackEndTable from "@/Components/Table/TBackEndTable";
import {Inertia} from "@inertiajs/inertia";

export default {
    name: "ContentImages",
    components: {
        TBackEndTable,
        TModal,
        TButton,
        AppLayout,
        Link
    },
    mixins: [settingsMenuMixin],
    props: {
        contentImages: {
            type: Array,
            default() {
                return []
            }
        },
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
        }
    },
    setup(props) {
        const {tags, sections} = toRefs(props);
        const showModal = ref(false);
        const modalContent = ref(null);
        const selectedItem = ref(null);
        const form = useForm({
            id: null
        })

        watch(()=>selectedItem,()=>{

        })

        const actionClick = (item,action)=> {
            console.log(action)
            switch (action) {
                case "delete":
                    showModal.value = true
                    modalContent.value = `You are going to delete <b> ${item.id} </b>, Are you sure ?`
                    break
                case "edit":
                    Inertia.visit(route('content-image.edit',item.id));
            }

        }

        const deleteItem = ()=> {
            form.id = selectedItem.value;
            form.delete(route('content-image.destroy', selectedItem.value), {
                preserveScroll: true,
                onSuccess: () => showModal.value = false,
            })
        }

        const compareOperators = reactive([
            {key: "contains", label: "contains"},
            {key: "notContains", label: "not contains"},
            {key: "starts", label: "starts"},
            {key: "ends", label: "ends"}
        ]);

        const header = reactive([
            {
                label: "Tag",
                key: "tag",
                align: "left",
                status: true,
                sortable: true,
                simpleSearchable: true,
                advancedSearchable: true,
                advancedSearchSelectInputSource: sections,
                advancedSearchInputType: "select",
                compareOperators: compareOperators
            },
            {
                label: "Section",
                key: "section",
                align: "left",
                status: true,
                sortable: true,
                simpleSearchable: true,
                advancedSearchable: true,
                advancedSearchSelectInputSource: tags,
                advancedSearchInputType: "select",
                compareOperators: compareOperators
            },
            {
                label: "Image",
                key: "image_src",
                align: "center",
                status: true,
                sortable: false,
                simpleSearchable: false,
                advancedSearchable: false,
                advancedSearchInputType: "between",
            }
        ])

        return {
            showModal,
            actionClick,
            deleteItem,
            modalContent,
            selectedItem,
            form,
            header,
            compareOperators,
        }
    }
}
</script>

<style scoped>

</style>
