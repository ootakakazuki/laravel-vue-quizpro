<template>
    HELLO VUE
</template>
<script>
    import { onMounted } from 'vue'
    export default ({
        setup() {
            console.log("start")

            onMounted(() > {
                console.log("hey")
            })
        },
    })
</script>