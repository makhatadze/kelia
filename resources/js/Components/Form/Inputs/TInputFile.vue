<template>
    <div>
        <!--Preview-->
        <div :class="['flex justify-center items-center my-2 overflow-hidden',radiusStyle]"
        >
            <img :class="['max-h-36 w-auto p-1 border',radiusStyle]" :src="preview"  alt=""/>
        </div>
        <!--Input-->
        <div :class="['flex border items-center overflow-hidden',radiusStyle]">
            <input ref="file" type="file"  @change="handleFileUpload(modelName)"/>
        </div>
    </div>
</template>

<script>
import {radiusSizeMixin} from "@/Mixins/radiusSizeMixin";
import {getData} from "@/Mixins/getData";
import {responseParse} from "@/Mixins/responseParse";

export default {
    name: "TInputFile",
    mixins: [radiusSizeMixin],
    emits: ["update:modelValue"],
    props: {
        modelValue: {
            type: [String],
            default: null
        },
        modelName: {
            type: [String],
            default: null
        },
        defaultValue: {
            type: [String],
            default: null
        }
    },
    data() {
        return {
            newImage: null,
            preview: this.defaultValue
        }
    },
    methods: {
        async handleFileUpload(modelName) {
            let file = this.$refs.file.files[0];
            const data = new FormData();
            data.append('file', file);
            data.append('type', modelName);
            await getData({
                method: 'POST',
                url: route('upload_image'),
                data: data
            }).then(response => {
                // Parse response notification.
                responseParse(response);
                if (response.status === 200) {
                    this.preview = response.data?.item?.full_src;
                    this.$emit("update:modelValue",response.data?.item?.id)
                }
            });
        },
    },
}
</script>

<style scoped>
.fade-enter-active, .fade-leave-active {
    transition: all .4s ease;
}

.fade-enter-from, .fade-leave-to {
    opacity: 0;
    transform: translateY(30px);
    max-height: 0;
}

.fade-enter-to, .fade-leave-from {
    opacity: 1;
    transform: translateX(30px);
    max-height: 100%;
}
</style>
