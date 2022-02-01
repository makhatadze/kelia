<template>
    <app-layout title="Packet">
        <template #header>Packet</template>

        <t-back-end-table
            @selectedItem="selectedItem = $event.data; actionClick($event.data, $event.action)"
            :content="data"
            :header="header"
            content-key="data"
            unique-id="id"
            search-route="question.index"
        >
            <template #top-right>
                <Link :href="route('question.create')">
                    <t-button color="green" design="light" border>+ Add New</t-button>
                </Link>
            </template>
        </t-back-end-table>
        <t-modal v-model="showModal">
            <template #header>
                Question Deleting
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
import {reactive, ref, watch} from "vue";
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
        data: {
            type: Array,
            default() {
                return []
            }
        },
    },
    setup(props) {
        const showModal = ref(false);
        const modalContent = ref(null);
        const selectedItem = ref(null);
        const form = useForm({
            id: null
        })

        watch(()=>selectedItem,()=>{

        })

        const actionClick = (item,action)=> {
            switch (action) {
                case "delete":
                    showModal.value = true
                    modalContent.value = `You are going to delete <b> ${item.id} </b>, Are you sure ?`
                    break
                case "edit":
                    Inertia.visit(route('question.edit',item.id));
            }

        }

        const deleteItem = ()=> {
            form.id = selectedItem.value;
            form.delete(route('question.destroy', selectedItem.value), {
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
                label: "Title",
                key: "body",
                align: "left",
                status: true,
                sortable: true,
                simpleSearchable: true,
                advancedSearchable: true,
                advancedSearchSelectInputSource: true,
                advancedSearchInputType: "text",
                compareOperators: compareOperators
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
