<template>
    <div>
        <li class="list-group-item my-1">
            <slot></slot>
            <small class="pl-2">{{time}}</small>
        </li>
        <div class="badge badge-success float-right">{{ user }}</div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        props: [
            'user',
            'time'
        ]
    }
</script>
