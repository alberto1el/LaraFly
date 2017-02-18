<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"> <slot name="title"></slot> </div>
                    <div class="panel-body"> <slot name="body"></slot> </div>
                </div>
            </div>
        </div>
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
