<template>
    <div>
        <li class="list-group-item my-1"><slot></slot></li>
        <div class="badge badge-success float-right">You</div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
