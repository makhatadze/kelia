<template>
    <div class="relative inline-block overflow-hidden">
        <input
            type="file"
            accept="image/*"
            class="hidden"
            ref="file"
            @change="handleFileUpload(modelName)"
        />
        <div style="max-width: 400px; max-height: 400px" >
            <img :src="modelValue ? preview : noImage" alt="Avatar" class="h-full w-full object-cover" />
        </div>
        <div
            class="absolute top-0 h-full w-full bg-black bg-opacity-25 flex items-center justify-center"
        >
            <button
                type="button"
                @click="browse()"
                class="rounded-full hover:bg-white hover:bg-opacity-25 p-2 focus:outline-none text-white transition duration-200"
            >
                <icon name="camera" class="h-6 w-6"></icon>
            </button>
            <button
                type="button"
                v-if="modelValue"
                @click="remove()"
                class="rounded-full hover:bg-white hover:bg-opacity-25 p-2 focus:outline-none text-white transition duration-200"
            >
                <icon name="x" class="h-6 w-6"></icon>
            </button>
        </div>
    </div>
</template>

<script>
import {radiusSizeMixin} from "@/Mixins/radiusSizeMixin";
import {getData} from "@/Mixins/getData";
import {responseParse} from "@/Mixins/responseParse";
import Icon from "../../Icon/ImageInputIcon"

export default {
    name: "TInputFile",
    components: {
      Icon
    },
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
            preview: this.defaultValue,
            noImage: '/no-image.jpeg'
        }
    },
    methods: {
        browse() {
            this.$refs.file.click();
        },
        remove() {
            this.$emit("update:modelValue",null)
        },
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
