<template>
    <app-layout title="Content Text">
        <template #header>Content Text</template>

        <t-back-end-table
            @selectedItem="selectedItem = $event.data; actionClick($event.data, $event.action)"
            :content="data"
            :header="header"
            content-key="data"
            unique-id="id"
            search-route="service-item.index"
        >
            <template #top-right>
                <Link v-if="service" :href="route('service-item.create',service.id)">
                    <t-button color="green" design="light" border>+ Add New</t-button>
                </Link>
            </template>
        </t-back-end-table>
        <t-modal v-model="showModal">
            <template #header>
                Service Deleting
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
                <form id="delete" @submit.prevent="deleteItem(service.id)">

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
    name: "ServiceItemIndex",
    components: {
        TBackEndTable,
        TModal,
        TButton,
        AppLayout,
        Link
    },
    mixins: [settingsMenuMixin],
    props: {
        service: {
            type: Object,
            default() {
                return {}
            }
        },
        data: {
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
        },
        textTypes: {
            type: Array,
            default() {
                return []
            }
        },
    },
    setup(props) {
        const { service } = toRefs(props);

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
                    Inertia.visit(route('service-item.edit',[item.service_id, item.id]));
            }

        }
        const deleteItem = (serviceId)=> {
            form.id = selectedItem.value;
            form.delete(route('service-item.destroy', [serviceId, selectedItem.value]), {
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
                label: "Head Title",
                key: "head_title",
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
                label: "Title",
                key: "title",
                align: "left",
                status: true,
                sortable: true,
                simpleSearchable: true,
                advancedSearchable: true,
                advancedSearchSelectInputSource: true,
                advancedSearchInputType: "text",
                compareOperators: compareOperators
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
