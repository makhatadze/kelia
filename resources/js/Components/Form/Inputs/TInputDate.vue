<template>
   1234
</template>

<script>
import TCalendarIcon from "@/Components/Icon/TCalendarIcon";
import {radiusSizeMixin} from "@/Mixins/radiusSizeMixin";
import TClockIcon from "@/Components/Icon/TClockIcon";
import TXCircleIcon from "@/Components/Icon/TXCircleIcon";


export default {
    props: {
        value: {
            required: true
        },
        mode: {
            default: 'date'
        },
        masks: {
            default: 'DD-MM-YYYY'
        },
        is24hr: {
            type: Boolean,
            default: false
        },
        isRange: {
            type: Boolean,
            default: false
        }
    },
    mixins: [radiusSizeMixin],
    components: {
        TXCircleIcon,
        TClockIcon,
        TCalendarIcon,
        DatePicker,
    },
    data() {
        return {
            inertnalDate: null,
            date: this.value
        }
    },
    watch: {
        date() {
            this.$emit('input', this.date);
        },
        value() {
            this.date = this.value
        }
    }
}
</script>

<style scoped>
* >>> select {
    background-image: none;
}
</style>
