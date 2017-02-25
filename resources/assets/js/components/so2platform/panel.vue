<template>
    <div class="panel panel-default">
        <div class="panel-heading"> <slot name="title"></slot> </div>
        <div class="panel-body"> <slot name="body"></slot> </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {

            };
        }
    }
</script>
