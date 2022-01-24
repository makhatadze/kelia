<template>
    <app-layout title="Content Text">
        <template #header>Content Text</template>

        <t-back-end-table
            @selectedItem="selectedItem = $event.data; actionClick($event.data, $event.action)"
            :content="data"
            :header="header"
            content-key="data"
            unique-id="id"
            search-route="contact.index"
        >
            <template #top-right>
                <Link :href="route('content-text.create')">
                    <t-button color="green" design="light" border>+ Add New</t-button>
                </Link>
            </template>
        </t-back-end-table>
        <t-modal v-model="showModal">
            <template #header>
                Contact Deleting
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
    name: "ContentText",
    components: {
        TBackEndTable,
        TModal,
        TButton,
        AppLayout,
        Link
    },
    mixins: [settingsMenuMixin],
    props: {
        data: {
            type: Array,
            default() {
                return []
            }
        }
    },
    setup() {
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
                    Inertia.visit(route('content-text.edit',item.id));
            }

        }

        const deleteItem = ()=> {
            form.id = selectedItem.value;
            form.delete(route('content-text.destroy', selectedItem.value), {
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
                label: "Name",
                key: "name",
                align: "left",
                status: true,
                sortable: true,
                simpleSearchable: true,
                advancedSearchable: true,
                advancedSearchSelectInputSource: true,
                advancedSearchInputType: "text",
                compareOperators: compareOperators
            },
            {
                label: "Email",
                key: "email",
                align: "left",
                status: true,
                sortable: true,
                simpleSearchable: true,
                advancedSearchable: true,
                advancedSearchSelectInputSource: true,
                advancedSearchInputType: "text",
                compareOperators: compareOperators
            },
            {
                label: "Date",
                key: "date",
                align: "left",
                status: true,
            },
            {
                label: "Time",
                key: "time",
                align: "left",
                status: true,
            },
            {
                label: "Mobile",
                key: "mobile",
                align: "left",
                status: true,
            },
            {
                label: "Message",
                key: "message",
                align: "left",
                status: true,
            },
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
